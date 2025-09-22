<?php

namespace App\Http\Controllers;

use App\Models\Connection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class monitoring extends Controller
{

    public function index(){
        return view('usermonitoring.user');
    }
    public function table1(){

        $sub = Connection::select('username')
        ->selectRaw('MAX(login_time) as latest_login')
        ->where('status', 'active')
        ->groupBy('username');

        $users = Connection::joinSub($sub, 'latest', function($join) {
            $join->on('mikrotik_users.username', '=', 'latest.username')
                 ->on('mikrotik_users.login_time', '=', 'latest.latest_login');
        })->orderBy('login_time', 'desc')
          ->paginate(10);
        

        return view('realtime2.useractive', compact('users'));
    }
}
