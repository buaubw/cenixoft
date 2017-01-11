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
  Route::get('profile/logo', 'ProfileController@logo');
  Route::get('profile/mobile', 'ProfileController@mobile');
  Route::get('profile/website', 'ProfileController@website');
  Route::get('profile/createlogo', 'ProfileController@createlogo');
  Route::get('profile/editlogo', 'ProfileController@editlogo');
  Route::get('profile/viewlogo', 'ProfileController@viewlogo');
  Route::resource('profile', 'ProfileController');
  Route::resource('mobile', 'MobileController');
  Route::resource('design', 'DesignController');
  Route::get('document/requirement', 'documentController@requirement');
  Route::get('document/contact', 'documentController@contact');
  Route::get('document/invoice', 'documentController@invoice');
  Route::get('document/quotation', 'documentController@quotation');
  Route::get('document/createrequirement', 'documentController@createrequirement');
  Route::get('document/createquotation', 'documentController@createquotation');
  Route::get('document/createinvoice', 'documentController@createinvoice');
  Route::get('document/createcontact', 'documentController@createcontact');
  Route::get('document/viewcompany', 'documentController@viewcompany');
  Route::get('document/inboxcontact', 'documentController@inboxcontact');
  Route::get('document/editrequirement', 'documentController@editrequirement');
  Route::get('document/editcontact', 'documentController@editcontact');
  Route::get('document/editinvoice', 'documentController@editinvoice');
  Route::get('document/editquotation', 'documentController@editquotation');
  Route::resource('document', 'DocumentController');
  Route::get('feedback/view', 'FeedbackController@view');
  Route::resource('feedback', 'FeedbackController');
  Route::get('account/customer', 'AccountController@customer');
  Route::get('account/viewcustomer', 'AccountController@viewcustomer');
  Route::get('account/admin', 'AccountController@admin');
  Route::get('account/createcustomer', 'AccountController@createcustomer');
  Route::get('account/createadmin', 'AccountController@createadmin');
  Route::get('account/viewadmin', 'AccountController@viewadmin');
  Route::resource('account', 'AccountController');
  Route::get('education/vieweducation', 'EducationController@vieweducation');
  Route::get('education/editeducation', 'EducationController@editeducation');
  Route::get('education/createeducation', 'EducationController@createeducation');
  Route::resource('education', 'EducationController');

  // Route::get('profile/profile', 'profileController@profile');

});

Auth::routes();

Route::get('/home', 'HomeController@index');
