<?php

namespace App\Http\Controllers;

use App\Models\RouterOsAPI;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        /*$ip = session()->get('ip');
        $user = session()->get('user');
        $pass = session()->get('pass');
        $API = new RouterOsAPI();
        $API->debug('false');

        if($API->connect($ip , $user , $pass)) {
            $identitas = $API->comm('/interface/print');
        } else {
            return'Koneksi Gagal';
        }

        $data = [
            'identitas' => $identitas[0]['name'],
        ]; */

        //dd($identitas);

        return view('dashboard');
    }
}
