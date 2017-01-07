<?php
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'web'], function() {

  Route::resource('website', 'WebsiteController');
  Route::resource('profile', 'ProfileController');

  // Route::get('profile/profile', 'profileController@profile');

});

Auth::routes();

Route::get('/home', 'HomeController@index');
