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

Route::get('/categories', [ CategoriesController::class, 'index' ]);
Route::get('/categories/create', [ CategoriesController::class, 'create' ]);
Route::get('/categories/{id}', [ CategoriesController::class, 'show' ]);
Route::post('/categories', [ CategoriesController::class, 'store' ]);
Route::get('/categories/{id}/edit', [ CategoriesController::class, 'edit' ]);
Route::put('/categories/{id}', [ CategoriesController::class, 'update' ]);
Route::delete('/categories/{id}', [ CategoriesController::class, 'destroy' ]);
