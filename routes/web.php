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

Route::get('/', 'pagecontroller@welcome');

Route::get('/about','pagecontroller@about');

Route::get('/contacts','pagecontroller@contacts');

//registercontroller
Auth::routes();

Route::get('users/register','Auth\RegisterController@showRegistrationForm');
Route::post('users/register','Auth\RegisterController@postRegister');

Route::get('users/logout', 'Auth\AuthController@getLogout');

Route::get('users/login','Auth\LoginController@ShowLoginForm');
Route::post('users/login','Auth\LoginController@posrLogin');
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('companies', 'CompanyController');

Route::get('loans', function() {
	$loans = App\Loan::all();
	return view('loans.index', compact('loans'));
});

Route::get('companies/{id}/loans', 'LoanController@index');

Route::get('account/my-loans', 'UserController@myLoans');