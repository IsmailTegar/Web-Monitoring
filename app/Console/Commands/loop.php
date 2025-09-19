<?php

namespace App\Console\Commands;

use App\Models\Connection;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class loop extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:loop';

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
        try {
            while (true) {
                Artisan::call('app:dummy');
                $this->info('Command app:dummy dijalankan ' . Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s'));
                sleep(10);
            }
        } catch (\Exception $e) {
            $this->error('Error: ' . $e->getMessage());
        }
    }
}
