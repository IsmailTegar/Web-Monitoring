<?php

namespace App\Http\Controllers;

use App\Models\RouterOsAPI;
use Illuminate\Http\Request;

class FetchMonitoringConnection extends Controller
{
    public function index()
    {
        $ip = session()->get('ip');
        $user = session()->get('user');
        $password = session()->get('pass');
        $API = new RouterOsAPI();
        $API->debug('false');

        if ($API->connect($ip, $user, $password)) {
            $connections = $API->comm('/ip/hotspot/active/print');

            $data = [
                'connections' => $connections,
            ];

            dd($data);

            return view('connection');

        } else {
            return redirect()->route('failed');
        }
    }
}
