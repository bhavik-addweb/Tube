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



Route::redirect('/','/login');
Route::resource('index','homepagecontroller');
Route::resource('homecat','homecatcontroller');
Auth::routes();

Route::get('admin/login','Auth\AdminLoginController@showLoginForm');
Route::post('admin/login','Auth\AdminLoginController@login')->name('adminlogin');

Route::get('admin/logout','Auth\AdminLoginController@showLogoutForm');
Route::post('admin/logout','Auth\AdminLoginController@logout')->name('adminlogout');
Route::get('admin/register','Auth\AdminRegisterController@showRegistrationForm');
Route::post('admin/register','Auth\AdminRegisterController@register')->name('adminregister');
route::group(["middleware"=>"auth:admin"],function(){
     Route::resource('admin','admincatcontroller');
    Route::resource('adm','admcontroller');
    Route::resource('user','usercontroller');
    Route::resource('video','videocontroller');
    Route::resource('adcom','adcomcontroller');
    Route::resource('adcon','admconcontroller');
    Route::resource('ads','adscontroller');
    Route::resource('viduser','vidusecontroller');
});

route::group(["middleware"=>"auth"],function(){
    route::get('checkuser',function(){
        return 'user success';
    });
});


Route::redirect('/','/login');

Route::group(["middleware"=>'auth'],function(){
        Route::resource('crud','CrudsController');
        Route::get('/home','CrudsController@index');
        Route::resource('vid','vidcontroller');
        Route::resource('like','likecontroller');
        Route::resource('com','comcontroller');
        Route::resource('con','contactuscontroller');
        Route::resource('prof','profcontroller');
        Route::resource('subs','subscontroller');
        Route::resource('playlist','playlistcontroller');
        Route::resource('myplaylist','myplaylistcontroller');
        Route::resource('cat','catcontroller');
    });
