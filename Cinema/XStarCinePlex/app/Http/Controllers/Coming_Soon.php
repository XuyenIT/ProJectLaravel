<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Coming_Soon extends Controller
{
    function show (){
        return view('film.Films_Sap_Chieu');
    }
}
