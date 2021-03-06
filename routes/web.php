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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('auth');

Route::resource('admin', 'AdminController')->middleware(['auth', 'cms.admin.role']);

Route::resource('post', 'PostController')->middleware(['auth', 'cms.contributor.role']);

Route::resource('category', 'CategoryController')->middleware(['auth', 'cms.admin.role']);

Route::resource('company', 'CompanyController')->middleware(['auth', 'cms.admin.role']);
