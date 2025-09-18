<?php

namespace App\Console\Commands;

use App\Models\Connection as ModelsConnection;
use Dba\Connection;
use Illuminate\Console\Command;

class deletedatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete';

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
        ModelsConnection::truncate();
        $this->info('Tabel dikosongkan');
    }
}
