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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('dashboard');
   });
});

/* Post */
Route::get('/post/show', 'PostController@index')->name('post');

Route::get('/post/new', 'PostController@create')->name('new');
// Route::post('/post/save-post', 'PostController@store')->name('save-post');

Route::get('/post/categories', 'PostController@categories')->name('categories');

Route::get('/post/edit/{id}', 'PostController@edit')->name('edit-post');
// Route::post('/post/edit/{id}', 'PostController@update')->name('update-post');
// Route::post('/post/edit/{id}', 'PostController@store')->name('save-post');

// Route::get('/post/edit/{id}', function ($id) {
//     $post = App\Post::find($id);
//     return view('post.edit', [
//         'data' => $post
//     ]);
// })->name('edit-post');
