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

Auth::routes();

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
    Route::get('/posts', [
        'uses' => 'PostsController@index',
        'as' => 'posts',
     ]
     );
    Route::get('/posts/trashed', [
      'uses' => 'PostsController@trashed',
      'as' => 'posts.trashed',
   ]
   );
    Route::get('/posts/kill/{id}', [
    'uses' => 'PostsController@kill',
    'as' => 'post.kill',
 ]
 );
    Route::get('/posts/restore/{id}', [
  'uses' => 'PostsController@restore',
  'as' => 'post.restore',
]
);
    Route::get('/posts/delete/{id}', [
      'uses' => 'PostsController@destroy',
      'as' => 'post.delete',
   ]
   );
    Route::get('/posts/edit/{id}', [
    'uses' => 'PostsController@edit',
    'as' => 'post.edit',
 ]
 );
    Route::post('/post/update/{id}', [
  'uses' => 'PostsController@update',
  'as' => 'post.update',
]
);
    Route::get('/category/create', [
         'uses' => 'CategoriesController@create',
         'as' => 'category.create',
      ]
      );

    Route::post('/category/store', [
         'uses' => 'CategoriesController@store',
         'as' => 'category.store',
      ]
      );
    Route::get('/categories', [
        'uses' => 'CategoriesController@index',
        'as' => 'categories',
     ]
     );
    Route::get('/category/edit/{id}', [
      'uses' => 'CategoriesController@edit',
      'as' => 'category.edit',
   ]
   );
    Route::get('/category/delete/{id}', [
    'uses' => 'CategoriesController@destroy',
    'as' => 'category.delete',
 ]
 );
    Route::post('/category/update/{id}', [
  'uses' => 'CategoriesController@update',
  'as' => 'category.update',
]
);
    Route::get('/tags', [
  'uses' => 'TagsController@index',
  'as' => 'tags',
]
);
    Route::get('/tags/edit/{id}', [
  'uses' => 'TagsController@edit',
  'as' => 'tag.edit',
]
);
    Route::post('/tags/update/{id}', [
'uses' => 'TagsController@update',
  'as' => 'tag.update',
]
);
    Route::get('/tags/delete/{id}', [
  'uses' => 'TagsController@destroy',
  'as' => 'tag.delete',
]
);
    Route::get('/tags/create/', [
  'uses' => 'TagsController@create',
  'as' => 'tag.create',
]
);
    Route::post('/tags/store', [
  'uses' => 'TagsController@store',
    'as' => 'tag.store',
  ]
  );
    Route::get('/users', [
    'uses' => 'UsersController@index',
    'as' => 'users',
  ]
  );
    Route::get('/users/create', [
    'uses' => 'UsersController@create',
    'as' => 'user.create',
  ]
  );
    Route::post('/user/store', [
    'uses' => 'UsersController@store',
      'as' => 'user.store',
    ]
    );
    Route::get('/users/admin/{id}', [
      'uses' => 'UsersController@admin',
      'as' => 'user.admin',
    ]
    );
    Route::get('/users/not-admin/{id}', [
      'uses' => 'UsersController@not_admin',
      'as' => 'user.not.admin',
    ]
    );
});
