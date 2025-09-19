<?php

namespace App\Console\Commands;

use App\Models\Connection;
use Carbon\Carbon;
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
            'destination'=> 'facebook.com',
            'login_time' => Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s'),
            'uptime'     => '00:15:23',
            'bytes_in'   => rand(1000, 5000),
            'bytes_out'  => rand(2000, 7000),
            'status'     => 'active',
        ]);

        Connection::create([
            'username'   => 'guest',
            'ip_address' => '192.168.88.3',
            'destination'=> 'google.com',
            'uptime'     => '00:05:47',
            'bytes_in'   => rand(1000, 5000),
            'bytes_out'  => rand(2000, 7000),
            'login_time'  => Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s'),
            'status'     => 'active',
        ]);

        $this->info('Dummy data inserted!');
    }
}
