<?php

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

Route::get('/', function () {
    return view('welcome');
});
//Route::view('/','welcome',['website'=>"纪耀俊"]);
Route::get('/test/{id}/t',function ($id){
    return 'my url: ' . route('t',['id'=>1]);
})->name('t');

//路由重定向
//Route::redirect('/hello', '/', 404);
//Route::get('user/{id}/profile', function ($id) {
//    $url = route('profile', ['id' => 1]);
//    return $url;
//})->name('profile');

Route::get('user/{id}', 'UserController@show');

