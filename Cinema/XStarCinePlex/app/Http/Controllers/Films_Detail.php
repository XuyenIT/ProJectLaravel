<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Films_Detail extends Controller
{
    function show(){
        return view ('film.Films_Detail');
    }
}
