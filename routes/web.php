<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my_page', 'MyPlaceController@index');
Route::get('/my_message', 'MessageController@index');
Route::get('/my_game', 'GameController@index');
Route::get('/my_music', 'MusicController@index');
Route::get('/my_groups', 'GroupController@index');
Route::get('/my_news', 'MyNewsController@index');
Route::get('/my_photo', 'MyPhotoController@index');
Route::get('/posts', 'MyPostController@index')->name('posts.index');
Route::get('/messages', 'MySecondController@index');

Route::get('/posts/create', 'MyPostController@create');
Route::get('/posts/update', 'MyPostController@update');
Route::get('/posts/delete', 'MyPostController@delete');
Route::get('/posts/first_or_create', 'MyPostController@firstOrCreate');
Route::get('/posts/update_or_create', 'MyPostController@updateOrCreate');


Route::get('/main', 'MyMainController@index')->name('main.index');
Route::get('/contacts', 'MyContactsController@index')->name('contacts.index');
Route::get('/about', 'MyAboutController@index')->name('about.index');
