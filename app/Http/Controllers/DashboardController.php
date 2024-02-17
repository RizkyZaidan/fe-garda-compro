<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Image;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Exception\BadResponseException;
use Dompdf\Dompdf;
// use Barryvdh\DomPDF\Facade\Pdf;
// use Barryvdh\DomPDF\Facade\Pdf;

class DashboardController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        try {
            return view('master.master')->nest('child', 'landing.index', []);
        } catch (BadResponseException $e) {
            $data = json_decode($e->getResponse()->getBody());
            $data = $data->message;
            dd($data);
        }
    }
}
