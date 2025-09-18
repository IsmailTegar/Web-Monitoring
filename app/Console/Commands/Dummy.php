<?php

namespace App\Console\Commands;

use App\Models\Connection;
use Illuminate\Console\Command;

class Dummy extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:dummy';

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
         Connection::create([
            'username'   => 'tegar',
            'ip_address' => '192.168.88.2',
            'mac_address'=> 'AA:BB:CC:DD:EE:FF',
            'uptime'     => '00:15:23',
            'bytes_in'   => rand(1000, 5000),
            'bytes_out'  => rand(2000, 7000),
            'last_seen'  => date('Y-m-d H:i:s'),
        ]);

        Connection::create([
            'username'   => 'guest',
            'ip_address' => '192.168.88.3',
            'mac_address'=> '11:22:33:44:55:66',
            'uptime'     => '00:05:47',
            'bytes_in'   => rand(1000, 5000),
            'bytes_out'  => rand(2000, 7000),
            'last_seen'  => date('Y-m-d H:i:s'),
        ]);

        $this->info('Dummy data inserted!');
    }
}
