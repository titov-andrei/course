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

// Route::get('/categories', [ CategoriesController::class, 'index' ]);
// Route::get('/categories/create', [ CategoriesController::class, 'create' ]);
// Route::get('/categories/{id}', [ CategoriesController::class, 'show' ]);
// Route::post('/categories', [ CategoriesController::class, 'store' ]);
// Route::get('/categories/{id}/edit', [ CategoriesController::class, 'edit' ]);
// Route::put('/categories/{id}', [ CategoriesController::class, 'update' ]);
// Route::delete('/categories/{id}', [ CategoriesController::class, 'destroy' ]);

Route::prefix('/categories')->controller(CategoriesController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::get('/{id}', 'show');
    Route::post('/', 'store');
    Route::get('/{id}/edit', 'edit');
    Route::put('/{id}', 'update');
    Route::delete('/{id}', 'destroy');
});
