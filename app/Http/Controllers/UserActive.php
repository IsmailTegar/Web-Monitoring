<?php

namespace App\Http\Controllers;

use App\Models\useractive as ModelsUseractive;
use Illuminate\Http\Request;

class UserActive extends Controller
{
    public function index()
    {
        // ambil semua data dari DB
        $logs = ModelsUseractive::orderBy('created_at', 'desc')->get();
        return view('usermonitoring.user', compact('logs'));
    }
}
