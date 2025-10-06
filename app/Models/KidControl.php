<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KidControl extends Model
{
     protected $table = 'mikrotik.kid_control_log';
    protected $fillable = [
        'name', 'mac_address', 'ip_address', 'bytes_up', 'bytes_down', 'active_time', 'status', 'activity', 'user_name', 'uptime', 'bytes_in', 'bytes_out'
    ];
    public $timestamps = false;
}
