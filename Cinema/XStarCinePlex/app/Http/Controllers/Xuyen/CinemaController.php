<?php

namespace App\Http\Controllers\Xuyen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CinemaController extends Controller
{
    //
    public function CenimaInFor(Request $request){
        $infoMovie = [
            'movietitle'=>$request->input('movietitle'),
            'Genre'=>$request->input('Genre'),

        ];
        // DD($infoMovie);
        return view('inforcenima.cenima',['infoMovie'=>$infoMovie]);
    }
}
