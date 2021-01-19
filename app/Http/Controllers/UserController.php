<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_insert(Request $request)
    {
      $user = $request->user;
    $user = [
        'email' => $user['email'],
        'name' => $user['displayName'],
        'phone' => $user['phoneNumber'],
        'avatar' => $user['photoURL'],
    ];
    $userData = User::insert($user);
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
