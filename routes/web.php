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
Auth::routes();

Route::get('/', 'PagesController@index')->name('home');
Route::get('/home', 'PagesController@index')->name('home');
Route::get('/news', 'PagesController@news')->name('news');
Route::get('/tour', 'PagesController@tour')->name('tour');
Route::get('/media', 'PagesController@media')->name('media');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/news/{post}', 'PagesController@singlepost')->name('singlepost');

Route::get('/admin','AdminsController@index')->name('admin');

Route::get('/admin/posts','AdminsPostController@index')->name('admin.posts.index');
Route::get('/admin/posts/create','AdminsPostController@create')->name('admin.posts.create');
Route::post('/admin/posts','AdminsPostController@store')->name('admin.posts.store');
Route::get('/admin/posts/{post}','AdminsPostController@show')->name('admin.posts.show');
Route::get('/admin/posts/{post}/edit','AdminsPostController@edit')->name('admin.posts.edit');
Route::put('/admin/posts/{post}/update','AdminsPostController@update')->name('admin.posts.update');
Route::delete('/admin/posts/{post}/destroy','AdminsPostController@destroy')->name('admin.posts.destroy');

Route::get('/admin/concerts','AdminsConcertController@index')->name('admin.concerts.index');
Route::get('/admin/concerts/create','AdminsConcertController@create')->name('admin.concerts.create');
Route::post('/admin/concerts','AdminsConcertController@store')->name('admin.concerts.store');
Route::get('/admin/concerts/{concert}','AdminsConcertController@show')->name('admin.concerts.show');
Route::get('/admin/concerts/{concert}/edit','AdminsConcertController@edit')->name('admin.concerts.edit');
Route::put('/admin/concerts/{concert}/update','AdminsConcertController@update')->name('admin.concerts.update');
Route::delete('/admin/concerts/{concert}/destroy','AdminsConcertController@destroy')->name('admin.concerts.destroy');

Route::get('/admin/media/{media}/edit','AdminsMediaController@edit')->name('admin.media.edit');
Route::put('/admin/media/{media}/update','AdminsMediaController@update')->name('admin.media.update');
