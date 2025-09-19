<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{

    protected $table = 'mikrotik.mikrotik_users';   // nama tabel di PostgreSQL
    public $timestamps = false;          // kalau tabelmu nggak ada kolom created_at/updated_at

    protected $fillable = [
        'mikrotik_id',
        'username',
        'ip_address',
        'destination',
        'login_by',
        'login_time',
        'uptime',
        'bytes_in',
        'bytes_out',
        'packets_in',
        'packets_out',
        'last_activity',
        'status',
        'updated_at',
    ];
}

