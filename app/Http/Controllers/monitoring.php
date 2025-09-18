<?php

namespace App\Http\Controllers;

use App\Models\Connection;
use Illuminate\Http\Request;

class monitoring extends Controller
{
    public function index(){

        $users = Connection::orderBy('updated_at', 'desc')->get();
        return view('usermonitoring.user', compact('users'));
    }
}
