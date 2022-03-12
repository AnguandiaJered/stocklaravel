<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function index()
    {
        $valerte = \DB::select("SELECT * FROM viewalerte  ");
        $totalstock = \DB::select("SELECT * FROM totalproduit");
        $totalsortie = \DB::select("SELECT * FROM totalsortie");
        $totalentree = \DB::select("SELECT * FROM totalprovision");
        $usertotal = \DB::select("SELECT * FROM totaluser");
        return view('welcome',compact('valerte','totalstock','totalsortie','totalentree','usertotal'));
    }
}
