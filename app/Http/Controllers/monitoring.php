<?php

namespace App\Http\Controllers;

use App\Models\Connection;
use Illuminate\Http\Request;

class monitoring extends Controller
{

    public function index(){
        return view('usermonitoring.user');
    }
    public function table1(){

        $users = Connection::orderBy('updated_at', 'desc')->get();
        $users = Connection::paginate(10);
        return view('realtime2.useractive', compact('users'));

    }
}
