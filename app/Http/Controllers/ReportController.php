<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{   

    public function index()
    {
        return view('traffic.index');
    }
    public function up()
    {
        $textup = new Report();
        $textup->text = '<font color=`ff0000`>Traffic Internet Melebihi Dari 50 Mbps</font>';
        $textup->save();

        return response()->json($textup, 200);
    }

    public function down()
    {
        $textup = new Report();
        $textup->text = 'Traffic Internet Stabil, Kurang Dari 50 Mbps';
        $textup->save();

        return response()->json($textup, 200);
    }
}
