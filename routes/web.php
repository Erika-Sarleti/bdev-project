<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/message', 'MessageController');
Route::post('/message', 'MessageController@store')->name('message.store');
Auth::routes();

Route::middleware('auth')
    ->namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->group(function(){
        Route::get('/', 'HomeController@index')->name('home');
        Route::resource('/devs', 'UserController');
    });

    Route::group(['middleware' => ['guest']], function () {
        Route::resource('/guest', 'Guest\GuestController');
    });
Route::get("{any?}", function() {
        return view("guest.home");
        })->where("any", ".*");
// Auth::routes();


// Route::get('/home', 'HomeController@index')->name('home');

        //   Route::middleware('auth')
        //      ->namespace('Admin')
        //      ->name('admin.')
        //      ->prefix('admin')
        //      ->group(function(){
        //          Route::get('/', 'HomeController@index')->name('home');
        //          Route::post('/slugger', 'HomeController@slugger')->name('slugger');
        //          Route::resource('/posts', 'PostController');
        //  });
        //  
