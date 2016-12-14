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



Route::get('company/stake_holders/firstname','Stake_holdersController@firstname');
Route::post('company/stake_holders/firstname','Stake_holdersController@firstname');

Route::get('company/stake_holders/lastname','Stake_holdersController@lastname');
Route::post('company/stake_holders/lastname','Stake_holdersController@lastname');

Route::get('company/stake_holders/position','Stake_holdersController@position');
Route::post('company/stake_holders/position','Stake_holdersController@position');

Route::get('company/stake_holders/sh_email','Stake_holdersController@sh_email');
Route::post('company/stake_holders/sh_email','Stake_holdersController@sh_email');

Route::get('company/stake_holders/sh_phone','Stake_holdersController@sh_phone');
Route::post('company/stake_holders/sh_phone','Stake_holdersController@sh_phone');

Route::get('company/company_location','CompanyLocationController@company_location');
Route::post('company/company_location','CompanyLocationController@company_location');

Route::get('company/company_address','CompanyAddressController@company_address');
Route::post('company/company_address','CompanyAddressController@company_address');

Route::get('company/company_email','CompanyEmailController@company_email');
Route::post('company/company_email','CompanyEmailController@company_email');

Route::get('company/company_terms','CompanyTermsController@company_terms');
Route::post('company/company_terms','CompanyTermsController@company_terms');

Route::get('company/company_name','CompanyNamesController@company_name');
Route::post('company/company_name','CompanyNamesController@company_name');

Route::get('company/compRegstry','CompanyRegistryController@compRegstry');
Route::post('company/compRegstry','CompanyRegistryController@compRegstry');