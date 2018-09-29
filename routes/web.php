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

// Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

// 卡中介檔,再進須通過認證頁面 (除公用頁面其他皆須)
Route::get('profile', function () {
    return '<h1>profile 維修中</h1>';
})->name('profile')->middleware('verified');
// Route::get('/profile', 'profileController@index')->name('profile')->middleware('verified');
