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

// Route::get('favorite',function () {
//     return view('posts.favorite');
// })->name('favorite');

// Route::get('create',function () {
//     return view('posts.create');
// })->name('create');

Route::get('create', 'PostController@create')->name('create');

Route::get('edit', 'PostController@edit')->name('edit');

//Route::get('/comment/{id}', 'CommentController@show')->name('comment');
Route::resource('comment', 'CommentController');

Route::resource('favorite', 'FavoriteController');

Route::resource('like', 'LikeController');

Route::resource('user', 'ProfileController');

//Route::resource('user', 'ProfileController@store');
//Route::get('user',function () {
  // return view('posts.user');
//s})->name('user');

//Route::get('createProfile',function () {
//   return view('posts.createProfile');
//})->name('createProfile');

/*Route::get('comment',function () {
    return view('posts.comment');
})->name('comment');*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


if (env('APP_ENV') === 'local') {
    URL::forceScheme('https');
}
