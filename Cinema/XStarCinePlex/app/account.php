<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    //
    protected $table = 'accounts';
    protected $fillable = ['Account_Id', 'fullname', 'email','phone', 'gender', 'password', 'birth', 'preferSite', 'image', 'active', 'role'];
}
