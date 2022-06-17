<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Posts extends Controller
{
    public function index() {

        (new Post())->save();

        return view('posts.index', [
            'rand' => mt_rand(0, 10),
            'time' => time(),
            'items' => [1, 2, 3]
        ]);
    }
}
