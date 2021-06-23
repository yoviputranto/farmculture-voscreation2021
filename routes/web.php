<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\User;


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

Route::get('/', 'FrontEndController@home')->name('home');
Route::get('/articles', 'FrontEndController@article')->name('articles');
Route::get('/articles/{slug}', 'FrontEndController@detail')->name('detail');
Route::get('/about', 'FrontEndController@about')->name('about');
Route::get('/search', 'FrontEndController@search')->name('search');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/admin', function () {
//return view('admin.dashboard');
//})->name('dashboard');


Route::prefix('admin')
    ->middleware(['web', 'auth'])
    ->group(function () {
        Route::get('/', function () {
            return view(
                'admin.dashboard',
                [
                    "category" => Category::count(),
                    "article" => Article::count(),
                    "published" => Article::where('status', 'Published')->count(),
                    "archived" => Article::where('status', 'Archived')->count(),
                ]

            );
        })->name('dashboard');

        Route::get('/profile/{id}', function ($id) {
            $user = User::whereId($id)->first();

            return view(
                'admin.profile',
                [
                    "user" => $user
                ]
            );
        })->name('profile');


        route::resource('category', 'CategoryController');
        route::resource('article', 'ArticleController');
    });

Route::get('/article/published', 'ArticleController@showPublished')->name('article.published')->middleware(['web', 'auth']);
Route::get('/article/archived', 'ArticleController@showArchived')->name('article.archived')->middleware(['web', 'auth']);
Route::get('/article/search', 'ArticleController@search')->name('article.search')->middleware(['web', 'auth']);
