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
            $blockedIP = $API->comm('/ip/firewall/address-list/print');
            $blockedWeb = $API->comm('/ip/firewall/layer7-protocol/print');
            $resource = $API->comm('/system/resource/print');
            $interface = $API->comm('/interface/ethernet/print');
            $routerboard = $API->comm('/system/routerboard/print');

        } else {
            return view('failed');
        }

        $data = [
            'identitas'    => $identitas[0]['name'] ?? '-',
            'online_users' => count($onlineUsers) ?? 0,
            'total_users'  => count($totalUsers) ?? 0,
            'blocked_ip'   => count($blockedIP) ?? 0,
            'blocked_web'  => count($blockedWeb) ?? 0,
            'cpu' => $resource[0]['cpu-load'],
            'uptime' => $resource[0]['uptime'],
            'version' => $resource[0]['version'],
            'interface' => $interface,
            'boardname' => $resource[0]['board-name'],
            'freememory' => $resource[0]['free-memory'],
            'freehdd' => $resource[0]['free-hdd-space'],
            'model' => $routerboard[0]['model'],
        ]; 


        return view('dashboard', $data);
    }

    public function cpu()
    {
        $ip = session()->get('ip');
        $user = session()->get('user');
        $pass = session()->get('pass');
        $API = new RouterOsAPI();
        $API->debug('false');

        if($API->connect($ip , $user , $pass)) {
            $cpu = $API->comm('/system/resource/print');
        } else {
            return view('failed');
        }

        $data = [
            'cpu' => $cpu['0']['cpu-load'],
        ]; 


        return view('realtime.cpu', $data);
    }

        public function uptime()
    {
        $ip = session()->get('ip');
        $user = session()->get('user');
        $pass = session()->get('pass');
        $API = new RouterOsAPI();
        $API->debug('false');

        if($API->connect($ip , $user , $pass)) {
            $uptime = $API->comm('/system/resource/print');
        } else {
            return view('failed');
        }

        $data = [
            'uptime' => $uptime['0']['uptime'],
        ]; 


        return view('realtime.uptime', $data);
    }


        public function traffic($traffic)
    {
        $ip = session()->get('ip');
        $user = session()->get('user');
        $pass = session()->get('pass');
        $API = new RouterOsAPI();
        $API->debug('false');

        if ($API->connect($ip, $user, $pass)) {
            $traffic = $API->comm('/interface/monitor-traffic', array(
                'interface' => $traffic,
                'once' => '',
            ));

            $rx = $traffic[0]['rx-bits-per-second'];
            $tx = $traffic[0]['tx-bits-per-second'];
        } else {
            return view('failed');
        }

        $data = [
            'rx' => $rx,
            'tx' => $tx,
        ];

        return view('realtime.traffic', $data);

    }


}

