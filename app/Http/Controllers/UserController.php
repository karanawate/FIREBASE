<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_insert(Request $request)
    {
       echo "Hi";
      $user = $request->user;
    $user = [
        'email' => $user['email'],
        'name' => $user['displayName'],
        'phone' => $user['phoneNumber'],
        'avatar' => $user['photoURL'],
    ];
try {
    $user_data = User::insert($user);
    return[
        'ok' =>true,
        'data' =>$user_data,
        'meassage' =>'Google with login User Succefully Inserted',
    ];
} catch (\Throwable $th) {
    //throw $th;
    return[
        'ok' =>true,
        'meassage' =>$th->getMeassage(),
    ];
}
    $userFromDB = \App\User::where('email', $user['email'])->first();
    if ($userFromDB) {
        # loginn user...
        echo "welcome";
    } else {
        // register first and then lgoin
        $userData = User::insert($user);
        echo "register first";
    }
//     // // auth()->login($userID);
//     //dd($user, $request->all());
    }
}
