<?php

namespace App\Http\Controllers;

use App\Models\Connection;
use App\Models\ConnectionHistory;
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
            $connections = $API->comm('/ip/firewall/connection/print');

             foreach ($connections as $conn) {
                ConnectionHistory::create([
                    'mikrotik_id'       => $conn['.id'] ?? null,
                    'protocol'          => $conn['protocol'] ?? null,
                    'src_address'       => $conn['src-address'] ?? null,
                    'dst_address'       => $conn['dst-address'] ?? null,
                    'reply_src_address' => $conn['reply-src-address'] ?? null,
                    'reply_dst_address' => $conn['reply-dst-address'] ?? null,
                    'tcp_state'         => $conn['tcp-state'] ?? null,
                    'timeout'           => $this->convertTimeout($conn['timeout'] ?? null),
                    'orig_packets'      => $conn['orig-packets'] ?? 0,
                    'orig_bytes'        => $conn['orig-bytes'] ?? 0,
                    'orig_fasttrack_packets' => $conn['orig-fasttrack-packets'] ?? 0,
                    'orig_fasttrack_bytes'   => $conn['orig-fasttrack-bytes'] ?? 0,
                    'repl_packets'      => $conn['repl-packets'] ?? 0,
                    'repl_bytes'        => $conn['repl-bytes'] ?? 0,
                    'repl_fasttrack_packets' => $conn['repl-fasttrack-packets'] ?? 0,
                    'repl_fasttrack_bytes'   => $conn['repl-fasttrack-bytes'] ?? 0,
                    'orig_rate'         => $conn['orig-rate'] ?? 0,
                    'repl_rate'         => $conn['repl-rate'] ?? 0,
                    'expected'          => isset($conn['expected']) ? filter_var($conn['expected'], FILTER_VALIDATE_BOOLEAN) : false,
                    'seen_reply'        => isset($conn['seen-reply']) ? filter_var($conn['seen-reply'], FILTER_VALIDATE_BOOLEAN) : false,
                    'assured'           => isset($conn['assured']) ? filter_var($conn['assured'], FILTER_VALIDATE_BOOLEAN) : false,
                    'confirmed'         => isset($conn['confirmed']) ? filter_var($conn['confirmed'], FILTER_VALIDATE_BOOLEAN) : false,
                    'dying'             => isset($conn['dying']) ? filter_var($conn['dying'], FILTER_VALIDATE_BOOLEAN) : false,
                    'fasttrack'         => isset($conn['fasttrack']) ? filter_var($conn['fasttrack'], FILTER_VALIDATE_BOOLEAN) : false,
                    'srcnat'            => isset($conn['srcnat']) ? filter_var($conn['srcnat'], FILTER_VALIDATE_BOOLEAN) : false,
                    'dstnat'            => isset($conn['dstnat']) ? filter_var($conn['dstnat'], FILTER_VALIDATE_BOOLEAN) : false,
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

    private function convertTimeout($str)
    {
        $seconds = 0;
        if (preg_match('/(\d+)h/', $str, $matches)) { $seconds += $matches[1]*3600; }
        if (preg_match('/(\d+)m/', $str, $matches)) { $seconds += $matches[1]*60; }
        if (preg_match('/(\d+)s/', $str, $matches)) { $seconds += $matches[1]; }
        return $seconds;
    }
}
