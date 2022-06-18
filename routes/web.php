<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Posts;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/posts', [ Posts::class, 'index' ]);
Route::post('/posts/create', [ Posts::class, 'create' ]);
Route::post('/posts', [ Posts::class, 'store' ]);
