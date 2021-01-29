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


Route::get('/', 'ProductController@index');
Route::get('/new_in', 'ProductController@new');
Route::get('/outlet', 'ProductController@outlet');

Route::prefix('admin')
    ->namespace('Admin')
    ->group(function() {
        Route::resource('/', 'DashboardController');
        Route::resource('/interior', 'InteriorController');
    });

Route::get('/login', 'LoginController@login');
Route::post('/login/auth', 'LoginController@auth');
Route::get('/logout', 'LoginController@logout');

Route::get('/interioradmin', function () {
	if(session()->exists('admin')) {
		return view('/pages/admin/dashboard');
    }
    else { return redirect('/login'); }
    return redirect('/login');
});

Route::get('/pages/admin/testimoni', 'CrudController@tampiltesti');
Route::post('/pages/admin/tambahtestimoni', 'CrudController@tambahtesti');
Route::get('/pages/admin/hapustesti', 'CrudController@hapustesti');
