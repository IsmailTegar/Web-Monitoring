<?php

namespace App\Console\Commands;

use App\Models\ConnectionHistory;
use Illuminate\Console\Command;

class DummyHistory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:dummy2';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
         for ($i = 1; $i <= 10; $i++) {
            ConnectionHistory::create([
                'mikrotik_id' => '*' . strtoupper(dechex(mt_rand(0x1000, 0xFFFF))),
                'protocol' => ['tcp', 'udp'][array_rand(['tcp', 'udp'])],
                'src_address' => '192.168.100.' . mt_rand(1, 254) . ':' . mt_rand(1024, 65535),
                'dst_address' => '172.217.' . mt_rand(0, 255) . '.' . mt_rand(0, 255) . ':' . mt_rand(1, 65535),
                'reply_src_address' => '172.217.' . mt_rand(0, 255) . '.' . mt_rand(0, 255) . ':' . mt_rand(1, 65535),
                'reply_dst_address' => '10.0.2.' . mt_rand(1, 254) . ':' . mt_rand(1024, 65535),
                'tcp_state' => ['established', 'time-wait', 'close'][array_rand(['established', 'time-wait', 'close'])],
                'timeout' => mt_rand(10, 86400), // detik 10s sampai 24h
                'orig_packets' => mt_rand(1, 5000),
                'orig_bytes' => mt_rand(100, 100000),
                'orig_fasttrack_packets' => mt_rand(0, 100),
                'orig_fasttrack_bytes' => mt_rand(0, 10000),
                'repl_packets' => mt_rand(1, 5000),
                'repl_bytes' => mt_rand(100, 100000),
                'repl_fasttrack_packets' => mt_rand(0, 100),
                'repl_fasttrack_bytes' => mt_rand(0, 10000),
                'orig_rate' => mt_rand(0, 1000),
                'repl_rate' => mt_rand(0, 1000),
                'expected' => (bool)mt_rand(0,1),
                'seen_reply' => (bool)mt_rand(0,1),
                'assured' => (bool)mt_rand(0,1),
                'confirmed' => (bool)mt_rand(0,1),
                'dying' => (bool)mt_rand(0,1),
                'fasttrack' => (bool)mt_rand(0,1),
                'srcnat' => (bool)mt_rand(0,1),
                'dstnat' => (bool)mt_rand(0,1),
            ]);
        }
    
    }
}
