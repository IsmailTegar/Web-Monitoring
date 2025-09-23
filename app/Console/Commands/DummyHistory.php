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
        for ($i = 1; $i <= 5; $i++) {
            ConnectionHistory::create([
                'mikrotik_id'       => '*DUMMY'.$i,
                'src_address'       => "192.168.1.$i:".rand(40000,60000),
                'dst_address'       => "172.217.194.".rand(1,255).":443",
                'protocol'          => 'tcp',
                'tcp_state'         => 'established',
                'timeout'           => rand(60, 600),
                'orig_packets'      => rand(100, 10000),
                'orig_bytes'        => rand(50000, 5000000),
                'repl_packets'      => rand(100, 10000),
                'repl_bytes'        => rand(50000, 5000000),
                'orig_rate'         => rand(1000, 100000),
                'repl_rate'         => rand(1000, 100000),
                'fasttrack'         => (bool)rand(0,1),
                'connection_mark'   => "mark-$i",
                'reply_src_address' => "172.217.194.".rand(1,255).":443",
                'reply_dst_address' => "192.168.1.$i:".rand(40000,60000),
            ]);
        }

    }
}
