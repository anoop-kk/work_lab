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
//Route::get('/','Auth\LoginController@showLoginForm');
Auth::routes();
Route::group(['middleware' => ['auth','isuser'],'namespace'=>'User'], function () {
    Route::get('user/home', 'Home@index');
});
Route::group(['middleware'=> ['auth','isadmin'],'namespace'=>'Admin'], function () {
    Route::get('admin/home', 'Home@index');
    Route::match(['post','get'],'admin/assign_role','Home@assign_role');
    Route::match(['post','get'],'admin/role','Home@role');
    Route::match(['post','get'],'admin/branches','Inventory@branches');
    Route::resource('admin/contacts','Contacts');
    Route::resource('admin/suppliers','Suppliers');
    Route::match(['get','post'],'admin/supplier/create',[
        'uses'=>'Suppliers@create',
        'as'=>'create-supplier',
    ]);
    Route::match(['get','post'],'admin/supplier/edit',[
        'uses'=>'Suppliers@edit',
        'as'=>'create-edit',
    ]);
});
Route::group(['middleware'=> ['auth','isemployee'],'namespace'=>'Employee'], function () {
    Route::get('employee/home', 'Home@index');
});
Route::group(['middleware'=> ['auth','isowner'],'namespace'=>'Owner'], function () {
    Route::get('employee/home', 'Home@index');
});

