<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Posts extends Controller
{
    public function index()
    {

        // dd(Post::all());

        // $post = new Post();
        // $post->title = '111';
        // $post->content = '111';
        // $post->a = '111';
        // $post->save();

        // (new Post())->save();

        return view('posts.index', ['posts' => Post::all()]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        // $args = $request->all();
        // $post = new Post();
        // $post->title = $args['title'];
        // $post->content = $args['content'];
        // $post->save();
        // return 'post created';

        $data = $request->only([ 'title', 'content' ]);
        Post::create($data);
        // return 'post created';
        return redirect('/posts');
    }
}
