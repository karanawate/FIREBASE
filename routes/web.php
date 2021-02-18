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
# location ...
Route::get('/location', function(){
    return view('location');
});

#... social sharing

    Route::get('socials', function(){
        return view('socialshare');
    });

Route::get('fetch_api', function(){
    return view('fetchapi');
});


Route::get('grid', function(){
    return view('GridSystem');
});

Route::get('blogs', function(){
   return view('design.blog');
});

Route::get('all', function(){
   return view('promiseall');
});

Route::get('callstack', function(){
   return view('callstack');
});
Route::get('promise_syntaxes', function(){
   return view('promise_syntax');
});
