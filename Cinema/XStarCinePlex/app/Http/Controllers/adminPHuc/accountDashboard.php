<?php

namespace App\Http\Controllers\adminPHuc;

use App\account;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class accountDashboard extends Controller
{
    //
    public function accountShow() {
      /*   $data = account::all(); */
        return view('admin.account'/* , ['accounts'=>$data] */);
    }
    public function dataAccount() {
       return Datatables::of(account::query())->make(true);
    }
}
