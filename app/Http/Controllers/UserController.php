<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // contoh data, nanti ganti dengan hasil API Mikrotik
        $users = [
            [
                "no" => 1,
                "ip" => "192.168.100.3",
                "mac" => "48:75:6D:8F:64:2C",
                "login" => "03/08/20, 11:30",
                "logout" => "-",
                "status" => "Online",
                "upload" => "20MB",
                "download" => "50MB",
                "history" => "Example.com"
            ],
            [
                "no" => 2,
                "ip" => "192.168.100.3",
                "mac" => "48:75:6D:8F:64:2C",
                "login" => "03/08/20, 11:30",
                "logout" => "-",
                "status" => "Online",
                "upload" => "20MB",
                "download" => "50MB",
                "history" => "Example.com"
            ]
            
        ];

        return view('hostpot', compact('users'));
    }
}
