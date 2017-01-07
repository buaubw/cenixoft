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
Route::get('/logout', function () {
  Session::flush();
    return view('welcome');
});

Route::group(['middleware' => 'web'], function() {

  Route::resource('website', 'WebsiteController');
  Route::get('profile/design', 'ProfileController@design');
  Route::get('profile/logo', 'ProfileController@logo');
  Route::get('profile/mobile', 'ProfileController@mobile');
  Route::get('profile/website', 'ProfileController@website');
  Route::resource('profile', 'ProfileController');
  Route::resource('mobile', 'MobileController');
  Route::resource('design', 'DesignController');
  Route::get('document/requirement', 'documentController@requirement');
  Route::get('document/Contact', 'documentController@Contact');
  Route::get('document/Invoice', 'documentController@Invoice');
  Route::get('document/Quotation', 'documentController@Quotation');
  Route::resource('document', 'DocumentController');

  // Route::get('profile/profile', 'profileController@profile');

});

Auth::routes();

Route::get('/home', 'HomeController@index');
