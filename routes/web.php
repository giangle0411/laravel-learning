<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', 'HomeController@index');

Route::get('/page/{id}', 'HomeController@page');
//    return view('welcome');
//   try {
//       DB::connection()->getPdo();
//       echo 'Yay, it worked!';
//   } catch (\Exception $e) {
//       die("Could not connect to the database, Please check your configuration. error:" . $e);
//   }


Route::get('/contact-us', 'ContactUsController@index');

Route::get('/about-us', 'TestController@test');

Route::post('contact-us/sendmessage', 'ContactUsController@sendMessage');

Route::post('contact-us/sendmessage/ajax', 'ContactUsController@sendMessageAjax');

Auth::routes();

Route::group([
    'middleware' => 'auth'
], function () {
    Route::resource('admin/specials', 'SpecialController');
});

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', 'HomeController@index')->name('home');
