<h1>Blog</h1>
@foreach ($posts as $post)
    <h2>{{ $post->title }}</h2>
    <em>{{ $post->created_at }}</em>
    <hr>
@endforeach
