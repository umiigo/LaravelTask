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

Auth::routes(['register' => false]);

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/admin/employees', 'EmployeeController@index')->name('admin.employees.index');
Route::resource('/admin/employees', 'Admin\EmployeeController', ['as'=>'admin']);
Route::resource('/admin/companies', 'Admin\CompanyController', ['as'=>'admin']);

Route::get('/companies', 'User\CompanyController@index')->name('companies');
Route::get('/employees', 'User\EmployeeController@index')->name('employees');

