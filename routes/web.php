<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/admin', function () {
//return view('admin.dashboard');
//})->name('dashboard');


Route::prefix('admin')
    ->middleware(['web', 'auth'])
    ->group(function () {
        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        route::resource('category', 'CategoryController');
        Route::group(['prefix' => 'filemanager',], function () {
            \UniSharp\LaravelFilemanager\Lfm::routes();
        });
    });

Route::get('/addarticle', function () {
    return view('admin.article.create');
});

Route::group(['prefix' => 'laravel-filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
