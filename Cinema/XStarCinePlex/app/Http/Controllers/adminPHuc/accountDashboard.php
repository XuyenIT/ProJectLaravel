<?php

namespace App\Http\Controllers\adminPHuc;

use App\account;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Image;
class accountDashboard extends Controller
{
    //
    //add account
    public function accountAdd() {
        return view('admin.addAccount');
    }
    public function accountShow()
    {
       /*  if ($request->ajax()) {
            $data = account::latest()->get();
            return  DataTables::of($data)
                ->addColumn('action', function ($data) {
                    $button = '<button type="button" name="edit" id="' . $data->email . '" class="edit btn btn-primary btn-sm"> Edit</button>';
                    $button .= '&nbsp; &nbsp; &nbsp; <button type="button" name="edit" id="' . $data->email . '" class="delete btn btn-danger btn-sm"> Delete</button>';
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        } */
       $data = account::all();
        return view('admin.account' , ['account'=>$data]);
    }
    /*  public function dataAccount() {
       return Datatables::of(account::query())->make(true);
    } */

    //function store add admin
    public function storeAdmin(Request $request) {
        $acitve = 2;
        $role = 1;
        $rules = array(
            'textName' => 'required',
            'textPhone' => 'required|digits:10',
            'textEmail' => 'required|email|unique:accounts,email',
            'textPassword'=>'required|min:5',
            'textDate' => 'required|date',
            'gender' => 'required|in:Female,Male',
            'textImage' => 'required|image|max:2048',
        );
        $error = Validator::make($request->all(), $rules);
        if($error->fails()) {
            return redirect('admin/accountAdd')
                        ->withErrors($error)
                        ->withInput();
        }
        $image = $request->file('textImage');

        $new_name = rand().'.'. $image->getClientOriginalExtension();
        $image->move(public_path('uploadPicture'), $new_name);
        $data = $request->except(['_token']);
        $account = new account;
        $account->fullname = $data['textName'];
        $account->email = $data['textEmail'];
        $account->phone = $data['textPhone'];
        $account->password = $data['textPassword'];
        $account->gender = $data['gender'];
        $account->birth = $data['textDate'];
        $account->image = $new_name;
        $account->active = $acitve;
        $account->role = $role;
        $account->preferSite=$data['textPrefer'];
        $check = $account->save();
        return redirect('admin/account');
    }

    public function editAccount($email) {
        $data = account::where('email', $email)->first();
        return view('admin.editAccount', ['emails'=>$data]);
    }

    public function updateAccout(Request $request, $email) {

    }

    public function deleteAccount($email) {
        account::where('email', $email)->delete();
        return redirect('admin/account')->with('success', 'Post deleted succesfull');
    }
}
