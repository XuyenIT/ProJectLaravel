<?php

namespace App\Http\Controllers\Front_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Generate_link extends Controller
{
    //click login
    public function login() {
        return view('layout.master');

    }
    public function index() {
        return view('index');
    }

    //link dan toi dashbord
    public function dashboard() {
        return view('admin.dasboard');
    }

    public function dashboardAccount() {
        return view('users.DashBoard');
    }


    //link tuong tac cua backend dashboar
    public function accountTable() {
        return view('admin.account');
    }
}
