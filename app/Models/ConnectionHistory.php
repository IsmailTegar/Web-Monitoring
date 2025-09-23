<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConnectionHistory extends Model
{
    protected $table = 'mikrotik.history';

    protected $fillable = [
        'mikrotik_id',
        'src_address',
        'dst_address',
        'protocol',
        'tcp_state',
        'timeout',
        'orig_packets',
        'orig_bytes',
        'repl_packets',
        'repl_bytes',
        'orig_rate',
        'repl_rate',
        'fasttrack',
        'connection_mark',
        'reply_src_address',
        'reply_dst_address',
    ];
}

