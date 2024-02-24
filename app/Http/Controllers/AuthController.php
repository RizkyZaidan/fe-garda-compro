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
        return view('admin.login');
    }

    public function login(Request $request)
    {
        try {
            $data = 
            DB::select(
                'SELECT * FROM users WHERE username = ? AND password = ?', 
                [
                    $request->get('username'), 
                    md5($request->get('password')) 
                ]
            );
            dd($data[0]->get('username'));
           
            if (sizeof($data)) {
                $request->session()->put('nama', $data['user']['data']['data']['user_real_name']);
                return redirect()->route('admin.index')->with('login', 'Berhasil Login');
            } else {
                return redirect('/login')->with(['y' => 'Username atau password salah, silahkan coba lagi']);
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
