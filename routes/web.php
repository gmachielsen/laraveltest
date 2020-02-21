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

// Route::get('posts', 'PublicController@displayPosts')->name('displayPosts');
//
// Route::namespace('Admin')->prefix('admin')->group(function(){
//
//   Route::get('users', 'UserController@listUsers');
//
//   Route::get('posts', function(){
//     return route('welcome', ['name' => 'John', 'age' => '25']);
//   });
//
// });
//
// Route::get('/{name}/{age}', 'PublicController@index')->name('welcome');
// Route::redirect('old', '/new', 301);

Route::get('/', 'PublicController@index')->name('welcome');
Route::view('/about', 'about')->name('about');
Route::get('/contact', 'PublicController@contact')->name('contact');
Route::post('/contact', 'PublicController@contactPost')->name('contactPost');
