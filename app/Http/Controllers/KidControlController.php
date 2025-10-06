<?php

namespace App\Http\Controllers;

use App\Models\KidControl;
use Illuminate\Http\Request;

class KidControlController extends Controller
{
    public function index()
    {
        $devices = KidControl::orderBy('name')->get();
        return view('realtime2.kidcontrol', compact('devices'));
    }
}
