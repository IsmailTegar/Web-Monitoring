<?php

namespace App\Http\Controllers;

use App\Models\RouterOsAPI;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $ip = '192.168.100.1';
        $user = 'admin';
        $pass = '12345';
        $API = new RouterOsAPI();
        $API->debug('false');

        if($API->connect($ip , $user , $pass)) {
            $identitas = $API->comm('/interface/print');
        } else {
            return'Koneksi Gagal';
        }

        dd($identitas);

        return view('dashboard');
    }
}
