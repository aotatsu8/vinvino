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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', 'PostController@index');
Route::resource('posts', 'PostController');

Route::get('profile', function () {
    return view('posts.profile');
})->name('profile');

Route::get('favorite',function () {
    return view('posts.favorite');
})->name('favorite');

Route::get('create',function () {
    return view('posts.create');
})->name('create');

Route::get('comment',function () {
    return view('posts.comment');
})->name('comment');



if (env('APP_ENV') === 'local') {
    URL::forceScheme('https');
} 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
