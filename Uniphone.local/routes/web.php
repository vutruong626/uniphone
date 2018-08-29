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
View::share('ADMIN_ROUTE','admin');
Route::get('/', function () {
    return view('welcome');
});
Route::get('trangchu.blade.php', function(){
	return view('trangchu');
});


//Thông Tin:
Route::get('thongbao.blade.php',function(){
	return view('thongbao');
});
Route::get('oudio.blade.php', function () {
    return view('clup');
});

//tin tức:
Route::get('phatsu.blade.php',function(){
	return view('phatsu');
});
Route::get('phatgiaods.blade.php',function(){
	return view('phatgiaods');
});

Route::get('phatgiaoxh.blade.php',function(){
	return view('phatgiaoxh');
});
Route::get('vhphatgiao.blade.php', function(){
	return view('vhphatgiao');
});
//thư Viện:
Route::get('video.blade.php', function(){
	return view('video');
});
Route::get('audio.blade.php', function(){
	return view('audio');
});


//route::get('thongtin','Controller@showinfo');
//trang Admin:

Route::get('lienhe.blade.php',function(){
	return view('lienhe');
});

/*
|--------------------------------------------------------------------------
| Web Admin
|--------------------------------------------------------------------------
*/

Route::prefix('login')->group(function () {
	Route::get('/','Auth\\LoginController@getLogin')->name('login');
	Route::post('/','Auth\\LoginController@postLogin');
	Route::get('/logout','Auth\\LoginController@getLogout')->name('logout');

});

Route::group(['prefix'=>'admin','middleware'=>'guest'],function(){
	include('router_admin.php');
});

// Route::prefix('admin')->group(function () {
//     include('router_admin.php');
// })->middleware('guest');

 // include('route_frontend.php');
// Route::get('login',function(){
// 	Route::get('/','Admin\\LoginController@getLogin');
// });