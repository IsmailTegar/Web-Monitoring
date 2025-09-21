<?php

namespace App\Http\Controllers;

use App\Models\Connection;
use App\Models\RouterOsAPI;


class fetchmonitoring extends Controller
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

                foreach ($connections as $conn) {
                Connection::create([
                    'username' => $conn['user'] ?? null,
                    'ip_address' => $conn['address'] ?? null,
                    'uptime'    => $conn['uptime'] ?? null,
                    'bytes_in'    => $conn['bytes_in'] ?? 0,
                    'bytes_out'    => $conn['bytes_out'] ?? 0,
                ]);
            }

            return response()->json([
                'status' => 'ok',
                'count'  => count($connections)
            ]);

        } else {
            return redirect()->route('failed');
        }
    }
}
