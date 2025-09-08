<?php

namespace App\Http\Controllers;

use App\Models\RouterOsAPI;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $ip = session()->get('ip');
        $user = session()->get('user');
        $pass = session()->get('pass');
        $API = new RouterOsAPI();
        $API->debug('false');

        if($API->connect($ip , $user , $pass)) {
            $identitas = $API->comm('/system/identity/print');
            $onlineUsers = $API->comm('/ip/hotspot/active/print');
            $totalUsers = $API->comm('/ip/hotspot/user/print');
             $blockedIP = $API->comm('/ip/firewall/address-list/print', [
             ".proplist" => ".id",
            "?list" => "blocked-ip"
            ]);
        } else {
            return redirect()->back()->with('error', 'Username atau password salah!');
        }

        $data = [
            'identitas'    => $identitas[0]['name'] ?? '-',
            'online_users' => count($onlineUsers) ?? 0,
            'total_users'  => count($totalUsers) ?? 0,
            'blocked_ip'   => count($blockedIP) ?? 0,
        ]; 


        return view('dashboard', $data);
    }
}
