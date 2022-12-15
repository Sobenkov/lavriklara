<h1>Blog</h1>
<a href="/posts/create">Add post</a>
@foreach($posts as $post)
    <div>{{ $post->title }}</div>
    <div>{{ $post->created_at }}</div>
    <hr>
@endforeach
