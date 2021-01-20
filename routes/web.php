<?php
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('index');
});

Route::post('/oauth_login', 'UserController@user_insert');

Route::get('/register', function(){
    return view('register');
});
Route::get('/location', function(){
    return view('location');
});

// Route::post('/oauth_login', function(Request $request){
//     $user = $request->user;
//     //dd($request->all());
//     $user = [
//         'email' => $user['email'],
//         'name' => $user['displayName'],
//         'phone' => $user['phoneNumber'],
//         'avatar' => $user['photoURL'],
//     ];


//     $userFromDB = \App\User::where('email', $user['email'])->first();
//     if ($userFromDB) {
//         # loginn user...
//         echo "welcome";
//     } else {
//         // register first and then lgoin
//         echo "register first";
//     }
//     // // auth()->login($userID);
//     //dd($user, $request->all());
// });
