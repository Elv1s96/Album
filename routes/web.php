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
Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);
Route::group(
    ['middleware' => 'auth'], function () {
    Route::get('/contact', 'ContactController@index')->name('contact');
    Route::get('/album', 'AlbumController@index')->name('album');
    Route::resource('category', 'CategoryController');
    Route::resource('album', 'AlbumController');
});
Route::get('/logout', 'Auth\LoginController@logout')->name('get-logout');
Route::get('/home', 'Admin/AdminController@index')->name('admin-page');
Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/banner', 'BannerController@index')->name('banner');
Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/show-by-category', 'MainController@index')->name('show_by_category');
