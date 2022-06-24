<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Posts as PostsController;
use App\Http\Controllers\Categories as CategoriesController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/posts', [ PostsController::class, 'index' ]);
Route::get('/posts/create', [ PostsController::class, 'create' ]);
Route::get('/posts/{id}', [ PostsController::class, 'show' ]);
Route::post('/posts', [ PostsController::class, 'store' ]);
