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
  Route::get('profile/design', 'ProfileController@design');
  Route::get('profile/logo', 'ProfileController@logo');
  Route::get('profile/mobile', 'ProfileController@mobile');
  Route::resource('profile', 'ProfileController');
  Route::resource('mobile', 'MobileController');
  Route::resource('design', 'DesignController');



  // Route::get('profile/profile', 'profileController@profile');

});

Auth::routes();

Route::get('/home', 'HomeController@index');
