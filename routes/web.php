<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\PageController;
use App\Http\Controllers\AccountController;

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

// Route::get('/','PageController@index');
// Route::get('/results','PageController@results');
// Route::get('/dashboard','AccountController@index');

Route::resource('/', PageController::class);
// Route::resource('/results', PageController::class);
Route::resource('/dashboard', AccountController::class);

Route::get('/contact', function () {
    return view('pages/contact');
});

Route::get('/results', function () {
    return view('pages/results');
});

Auth::routes();




