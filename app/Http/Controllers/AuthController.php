<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Exceptions\BadResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\BadResponseException;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        try {
            $authUser = config('client_be')->request('POST', '/auth/login', [
                'headers' => [
                    'Accept' => 'application/json'
                ],
                'exceptions' => false,
                'form_params' => [
                    'username' => $request->get('username'),
                    'password' => $request->get('password')
                ]
            ]);
            $data['user'] = json_decode($authUser->getBody()->getContents(), TRUE);
           
            if ($data['user']['statusCode'] == 200) {
                $request->session()->put('nama', $data['user']['data']['data']['user_real_name']);
                $request->session()->put('username', $data['user']['data']['data']['username']);
                $request->session()->put('nip', $data['user']['data']['data']['nip']);
                $request->session()->put('pegawai_id', $data['user']['data']['data']['pegawai_id']);
                $request->session()->put('pegawai_email', $data['user']['data']['data']['user_email']);
                $request->session()->put('pegawai_mobile', $data['user']['data']['data']['user_phone_number']);
                $request->session()->put('token', $data['user']['data']['token']);
                $request->session()->put('id_unit_kerja', $data['user']['data']['data']['unit_kerja_id']);
                $request->session()->put('unit_kerja', $data['user']['data']['data']['unit_kerja_name']);
                $request->session()->put('kode_cabang', $data['user']['data']['data']['branch_code']);
                $request->session()->put('nama_cabang', $data['user']['data']['data']['branch_name']);
                $request->session()->put('jabatan', $data['user']['data']['data']['jabatan']);
                $request->session()->put('pemutus', $data['user']['data']['data']['list_pemutus']);
                $request->session()->put('foto', $data['user']['data']['data']['foto']);
                $request->session()->put('level_jabatan', $data['user']['data']['data']['level_pangkat_id']);
                // $request->session()->put('puk', $data['user']['data']['data']['user_role_name']);
                $request->session()->put('role', $data['user']['data']['data']['user_role_name']);

                // dd($data['user']['data']['induk_direksi']);
                if (isset($data['user']['data']['induk_direksi'][0]['id'])) {
                    $request->session()->put('induk', $data['user']['data']['induk_direksi'][0]['id']);
                } else {
                    // Penanganan jika 'induk_direksi' tidak ada
                    // Misalnya, Anda dapat memberikan nilai default atau menetapkan sesuatu yang sesuai
                    $request->session()->put('induk', $data['user']['data']['induk_direksi']);
                }
                // $request->session()->put('role', 'staff');

                // Get Detail Pemutus From HRIS
                if (isset($data['user']['data']['data']['list_pemutus'])) {
                    $listPemutus = $data['user']['data']['data']['list_pemutus'];
                    $listPemutusDetailed = [];
                    foreach ($listPemutus as $pemutus) {
                            $reqDetailPemutus = json_decode(
                                config('client_hris')->request('GET', '/pegawai/detail/'.$pemutus['pegawai_id'], [
                                'headers' => [
                                    'Authorization' => 'Bearer ' . Session::get('token'),
                                    'Accept' => 'application/json'
                                ],
                                'exceptions' => false
                            ])->getBody()->getContents(), TRUE)['data'];
                            $pemutusTemp = array(
                                                'id'=> $reqDetailPemutus['id'],
                                                'user_id'=> $reqDetailPemutus['user_id'],
                                                'nip'=> $reqDetailPemutus['nip'],
                                                'kode_jab'=> $reqDetailPemutus['kdjab'],
                                                'nama'=> $reqDetailPemutus['nmpegawai'],
                                                'email'=> $reqDetailPemutus['email'],
                                                'telephone'=> $reqDetailPemutus['phone_number'],
                                                'jabatan'=> $reqDetailPemutus['nama'],
                                                'unit_kerja_id'=> $reqDetailPemutus['unit_kerja_id'],
                                                'level_jabatan_id'=> $reqDetailPemutus['level_jabatan_id']
                                            );
                            $listPemutusDetailed[$pemutusTemp['id']] = $pemutusTemp;
                    }
                    session()->put('list_pemutus_detailed', json_encode($listPemutusDetailed));
                }


                if (isset($data['user']['data']['data']['user_role_name'])) {
                    if ($data['user']['data']['data']['user_role_name'] == "user-role-not-found") {
                        return redirect('/')->with(['notexistuser' => 'User tidak terdaftar di aplikasi sisuka']);
                    } else {
                        $request->session()->put('role', $data['user']['data']['data']['user_role_name']);
                    }
                } else {
                    return redirect('/')->with(['y' => 'User/password salah, silahkan coba lagi - FE']);
                }

                return redirect()->route('dashboard.index')->with('login', 'Berhasil Login');
            }
        } catch (BadResponseException $e) {
            report($e);
            $response = json_decode($e->getResponse()->getBody());

            return redirect('/')->with(['wrongauth' => 'User/password salah, silahkan coba lagi']);
        }
    }

    public function logout(Request $request)
    {
        $request->session()->put('token', 'expired');
        return redirect('/')->with('logout', 'Berhasil Logout');
    }
}
