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

Route::get('about','pagecontroller@about');

Route::get('contacts','pagecontroller@contacts');

Route::get('companies','pagecontroller@companies');

//loan forms

Route::get('loanform/loan_app_reason','LoanformController@loan_app_reason');
Route::post('loanform/loan_app_reason','LoanformController@loan_app_reason');

Route::get('loanform/total_loan','LoanformController@total_loan');
Route::post('loanform/total_loan','LoanformController@total_loan');

Route::get('loanform/creditor','LoanformController@creditor');
Route::post('loanform/creditor','LoanformController@creditor');

Route::get('loanform/edu_background','LoanformController@edu_background');
Route::post('loanform/edu_background','LoanformController@edu_background');

Route::get('loanform/working_company','LoanformController@working_company');
Route::post('loanform/working_company','LoanformController@working_company');

Route::get('loanform/business_plan','LoanformController@business_plan');
Route::post('loanform/business_plan','LoanformController@business_plan');

Route::get('loanform/firstname','CustomerNamesController@firstname');
Route::post('loanform/firstname','CustomerNamesController@firstname');

Route::get('loanform/lastname','CustomerNamesController@lastname');
Route::post('loanform/lastname','CustomerNamesController@lastname');

Route::get('loanform/address','CustomerAddressController@address');
Route::post('loanform/address','CustomerAddressController@address');

//registercontroller
Auth::routes();

Route::get('users/register','Auth\RegisterController@showRegistrationForm');
Route::post('users/register','Auth\RegisterController@register');

Route::get('users/logout', 'Auth\AuthController@getLogout');

Route::get('home','HomeController@index');

Route::get('users/login','Auth\LoginController@ShowLoginForm');
Route::post('users/login','Auth\LoginController@posrLogin');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('companies', 'CompanyController');

Route::get('companies/{id}/loans/show','LoanController@index');
Route::get('companies/{id}/loans', 'LoanController@index');
Route::get('account/my-loans', 'UserController@myLoans');

Route::get('companies/{id}/loans/apply', 'LoanController@create');
Route::post('companies/{id}/loans/apply', 'LoanController@store');
Route::post('companies/search', 'CompanyController@search');
Route::get('companies/search', 'CompanyController@search');


Route::get('transactions/form_records','TransactionsController@create');
Route::post('transaction/form_records','TransactionController@savedata');
Route::get('transactions/records','TransactionsController@index');

Route::get('companies/{id}/transactions/create','TransactionTableController@create');
Route::post('companies/{id}/transactions/create','TransactionTableController@store');
Route::get('companies/{id}/transactions/show','TransactionTableController@show');

Route::get('companies/{id}/stakeholders/create','StakeHoldersController@create');
Route::post('companies/{id}/stakeholders/create','StakeHoldersController@store');
Route::get('companies/{id}/stakeholders/show','StakeHoldersController@show');