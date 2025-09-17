<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class useractive extends Model
{
    protected $table = 'connections'; // nama tabel di PostgreSQL
    public $timestamps = false;     // karena created_at otomatis kita simpan sendiri
    protected $fillable = [
        'src_ip',
        'dst_ip',
        'start_time',
        'uptime_seconds',
        'status',
        'created_at'
    ];
}
