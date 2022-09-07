<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

//User
Route::get('/', function () {
    return view('new');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Admin CRUD, Login And Logout
Route::get('admin/login', 'Admin\LoginController@index')->middleware('login_check');;
Route::post('login/password_check', 'Admin\LoginController@password_check');
Route::get('logout', 'Admin\LoginController@logout');

Route::group(['middleware' => 'admin', 'namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::resource('user', 'Usercontroller');
    Route::resource('admin', 'Admincontroller');
});

