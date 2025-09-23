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
        ->selectRaw('MAX(id) as latest_id')
        ->groupBy('username');

        $users = Connection::joinSub($sub, 'latest', function ($join) {
            $join->on('mikrotik_users.username', '=', 'latest.username')
                ->on('mikrotik_users.id', '=', 'latest.latest_id');
            })
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('realtime2.useractive', compact('users'));
    }
}
