<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConnectionHistory extends Model
{
    protected $table = 'mikrotik.history';
    public $timestamps = false;

    protected $fillable = [
        'mikrotik_id',
        'protocol',
        'src_address',
        'dst_address',
        'reply_src_address',
        'reply_dst_address',
        'tcp_state',
        'timeout',
        'orig_packets',
        'orig_bytes',
        'orig_fasttrack_packets',
        'orig_fasttrack_bytes',
        'repl_packets',
        'repl_bytes',
        'repl_fasttrack_packets',
        'repl_fasttrack_bytes',
        'orig_rate',
        'repl_rate',
        'expected',
        'seen_reply',
        'assured',
        'confirmed',
        'dying',
        'fasttrack',
        'srcnat',
        'dstnat'
    ];

}

