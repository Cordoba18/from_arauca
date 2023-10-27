<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    function Index(){
        $departaments = DB::select('SELECT * FROM departaments');
        return view('welcome' ,compact('departaments'));
    }
}
