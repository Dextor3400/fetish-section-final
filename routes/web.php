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
    return view('pages.home');
});

Auth::routes();

Route::get('/home', 'PagesController@index')->name('home');
Route::get('/news', 'PagesController@news')->name('news');
Route::get('/tour', 'PagesController@tour')->name('tour');
Route::get('/media', 'PagesController@media')->name('media');
Route::get('/contact', 'PagesController@contact')->name('contact');

Route::get('/admin','AdminsController@index')->name('admin');

Route::get('/admin/posts','AdminsPostController@index')->name('admin.posts.index');
Route::get('/admin/posts/create','AdminsPostController@create')->name('admin.posts.create');
Route::post('/admin/posts','AdminsPostController@store')->name('admin.posts.store');
Route::get('/admin/posts/{post}','AdminsPostController@show')->name('admin.posts.show');
Route::get('/admin/posts/{post}/edit','AdminsPostController@edit')->name('admin.posts.edit');
Route::put('/admin/posts/{post}/update','AdminsPostController@update')->name('admin.posts.update');
Route::delete('/admin/posts/{post}/destroy','AdminsPostController@destroy')->name('admin.posts.destroy');
