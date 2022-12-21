<h1>Categories</h1>
<a href="/categories/create">Add category</a>
@foreach($categories as $category)
    <div>{{ $category->title }}</div>
    <div>{{ $category->created_at }}</div>
    <a href="/categories/{{$category->id}}">More...</a>
    <hr>
@endforeach
