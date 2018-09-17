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

// Route::get('/',[
//     'as' => 'dashboard',
//     'uses' => 'DashboardController@index'
// ]);

Auth::routes();

// Route::get('/author/post', 'DashboardController@getPostForm')->name('post.form');

// Route::post('/author/post', 'DashboardController@createPost')->name('post.form');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/post/create', [
        'uses' => 'PostsController@create',
        'as' => 'post.create',
     ]
     );
    Route::get('/home', 'HomeController@index')->name('home');

    Route::Post('/post/store', [
         'uses' => 'PostsController@store',
         'as' => 'post.store',
      ]
      );

    Route::get('/category/create', [
         'uses' => 'CategoriesController@store',
         'as' => 'category.create',
      ]
      );
    Route::post('/category/store', [
         'uses' => 'CategoriesController@store',
         'as' => 'category.store',
      ]
      );
});
