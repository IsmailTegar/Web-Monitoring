<?php

namespace App\Http\Controllers;

use App\Models\RouterOsAPI;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $ip = session()->get('ip');
        $user = session()->get('user');
        $password = session()->get('pass');
        $API = new RouterOsAPI();
        $API->debug('false');

        if ($API->connect($ip, $user, $password)) {

            $hotspotuser = $API->comm('/ip/hotspot/user/print');
            $server = $API->comm('/ip/hotspot/print');
            $profile = $API->comm('/ip/hotspot/user/profile/print');


            $data = [
                'totalhotspotuser' => count($hotspotuser),
                'hotspotuser' => $hotspotuser,
                'server' => $server,
                'profile' => $profile,
            ];

            return view('hotspot.hotspot', $data);

        } else {

           return redirect()->route('failed');
        }
    }

    public function add(Request $request)
    {

        $request->validate([
            'user' => 'required',
            'password' => 'required',
        ]);

        $ip = session()->get('ip');
        $user = session()->get('user');
        $password = session()->get('password');
        $API = new RouterosAPI();
        $API->debug('false');

        if ($API->connect($ip, $user, $password)) {
            $API->comm('/ip/hotspot/user/add', [

                'name' => $request['user'],
                'password' => $request['password'],
                'server' => $request['server'],
                'profile' => $request['profile'],
                'limit-uptime' => $request('timelimit') == '' ? '0' : $request['timelimit'],
                'comment' => $request['comment'] == '' ? '' : $request['comment'],
            ]);
        } else {

            return redirect('failed');
        }

        return redirect()->route('hotspot.hotspot');
    }
}

