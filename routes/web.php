<?php
use Illuminate\Http\Request;
use App\Http\Middleware\CheckAdmin;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/logout', function () {
  Session::flush();
    return view('welcome');
});

Route::group(['middleware' => 'web'], function() {

  Route::get('contact/create2/{id}', 'ContactController@create2');
  Route::get('contact/listdata/{id}', 'ContactController@listdata');
  Route::resource('contact', 'ContactController');
  Route::get('invoice/create2/{id}', 'InvoiceController@create2');
  Route::get('invoice/listdata/{id}', 'InvoiceController@listdata');
  Route::resource('invoice', 'InvoiceController');
  Route::get('quatation/create2/{id}', 'QuatationController@create2');
  Route::get('quatation/listdata/{id}', 'QuatationController@listdata');
  Route::resource('quatation', 'QuatationController');
  Route::get('customercontact/create2/{id}', 'CustomercontactController@create2');
  Route::get('customercontact/listdata/{id}', 'CustomercontactController@listdata');
  Route::resource('customercontact', 'CustomercontactController');
  Route::get('requirement/create2/{id}', 'RequirementController@create2');
  Route::get('requirement/listdata/{id}', 'RequirementController@listdata');
  Route::resource('requirement', 'RequirementController');
  Route::resource('website', 'WebsiteController');
  Route::get('profile/logo', 'ProfileController@logo');
  Route::get('profile/mobile', 'ProfileController@mobile');
  Route::get('profile/website', 'ProfileController@website');
  Route::get('profile/createlogo', 'ProfileController@createlogo');
  Route::get('profile/editlogo', 'ProfileController@editlogo');
  Route::get('profile/viewlogo', 'ProfileController@viewlogo');
  Route::resource('profile', 'ProfileController');
  Route::resource('project', 'ProjectController');
  Route::resource('logo', 'LogoController');
  Route::resource('website', 'WebsiteController');
  Route::resource('mobile', 'MobileController');

  Route::get('document/requirement', 'documentController@requirement')->middleware(CheckAdmin::class);
  Route::get('document/contact', 'documentController@contact')->middleware(CheckAdmin::class);
  Route::get('document/invoice', 'documentController@invoice')->middleware(CheckAdmin::class);
  Route::get('document/quotation', 'documentController@quotation')->middleware(CheckAdmin::class);
  Route::get('document/createrequirement', 'documentController@createrequirement')->middleware(CheckAdmin::class);
  Route::get('document/createquotation', 'documentController@createquotation')->middleware(CheckAdmin::class);
  Route::get('document/createinvoice', 'documentController@createinvoice')->middleware(CheckAdmin::class);
  Route::get('document/createcontact', 'documentController@createcontact')->middleware(CheckAdmin::class);
  Route::get('document/viewcompany', 'documentController@viewcompany')->middleware(CheckAdmin::class);
  Route::get('document/inboxcontact', 'documentController@inboxcontact')->middleware(CheckAdmin::class);
  Route::get('document/editrequirement', 'documentController@editrequirement')->middleware(CheckAdmin::class);
  Route::get('document/editcontact', 'documentController@editcontact')->middleware(CheckAdmin::class);
  Route::get('document/editinvoice', 'documentController@editinvoice')->middleware(CheckAdmin::class);
  Route::get('document/editquotation', 'documentController@editquotation')->middleware(CheckAdmin::class);
  Route::get('document/project/{id}', 'DocumentController@project')->middleware(CheckAdmin::class);

  Route::get('document/uploadDoc/{id}', 'DocumentController@uploadDoc');
  Route::get('document/customerdocument/{id}', 'DocumentController@customerdocument');
  Route::post('document/feedback', 'DocumentController@feedback');
  Route::get('document/customerindex', 'DocumentController@customerindex');

  Route::resource('document', 'DocumentController');

  Route::get('feedback/view/{id}', 'FeedbackController@view');
  Route::resource('feedback', 'FeedbackController');
  Route::get('/changepassword', 'AccountController@changepassword');

  Route::get('account/customer', 'AccountController@customer');
  Route::get('account/viewcustomer', 'AccountController@viewcustomer');
  Route::get('account/admin', 'AccountController@admin');
  Route::get('account/createcustomer', 'AccountController@createcustomer');
  Route::get('account/createadmin', 'AccountController@createadmin');
  Route::get('account/viewadmin', 'AccountController@viewadmin');
  Route::resource('account', 'AccountController');
  Route::resource('customer', 'CustomerController');
  Route::get('education/{id}/vieweducation', 'EducationController@vieweducation');
  Route::get('education/editeducation', 'EducationController@editeducation');
  Route::get('education/createeducation', 'EducationController@createeducation');
  Route::get('education/educationlist', 'EducationController@educationlist');
  Route::resource('education', 'EducationController');

  Route::get('addmoreinfo', 'HomeController@addmoreinfo');
  Route::get('/addinfo', 'HomeController@addinfo');
  Route::get('/', 'HomeController@index');
  Route::get('customerindex', 'HomeController@customerindex');
  Route::get('home/website/{id}', 'HomeController@website');
  Route::get('home/logo/{id}', 'HomeController@logo');
  Route::get('home/mobile/{id}', 'HomeController@mobile');
  // Route::get('profile/profile', 'profileController@profile');

});

// Route::get('admin/profile', function () {
//     //
// })->middleware(CheckAdmin::class);

Auth::routes();

Route::get('/home', 'HomeController@index');
