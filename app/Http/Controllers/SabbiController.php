<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SabbiController extends Controller
{
    function vistaSabbi(){
        return view('sabbi.nuevoseguimiento');
    }
}
