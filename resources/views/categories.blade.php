<h1>Categories</h1>
<div>
    <a href="{{ route('category.create') }}">create category</a>
</div>
@foreach($categories as $category)
    <div>
        <h2><a href="{{ route('category.show', $category->id) }}">{{ $category->title }}</a></h2>
        <p>{{ $category->description }}</p>
    </div>
@endforeach
