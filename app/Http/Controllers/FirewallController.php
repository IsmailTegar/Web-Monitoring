<?php

namespace App\Http\Controllers;

use App\Models\RouterOsAPI;
use Illuminate\Http\Request;

class FirewallController extends Controller
{
    public function index()
    {
        $ip = session()->get('ip');
        $user = session()->get('user');
        $password = session()->get('pass');
        $API = new RouterOsAPI();
        $API->debug('false');

        if ($API->connect($ip, $user, $password)) {

            $blockedip = $API->comm('/ip/firewall/address-list/print');


            $data = [
                'totalblockedip' => count($blockedip),
                'blockedip' => $blockedip,
            ];

            dd($data);

            return view('blockedip.blockedip', $data);

        } else {


            return redirect('failed');
        }
    }
}
