<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Now_Showing_Films extends Controller
{
    function Show_films(){
        return view('film.Films_Dang_Chieu');
    }
}
