<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\account;
use Faker\Generator as Faker;

$factory->define(account::class, function (Faker $faker) {
    return [
        //
        'Account_Id' => $faker->Account_Id,
        'fullname' => $faker->fullname,
        'email'=>$faker->email,
        'phone'=>$faker->phone,
        'gender'=>$faker->gender,
        'password'=>$faker->password,
        'birth'=>$faker->birth,
        'preferSite'=>$faker->preferSite,
        'image'=>$faker->image,
        'active'=>$faker->active,
        'role'=>$faker->role,
    ];
});
