<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Posts;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hi', [ Posts::class, 'index' ]);
