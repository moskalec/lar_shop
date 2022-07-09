<h1>{{ $category->title }}</h1>
<p>{{ $category->description }}</p>
<div>
    <a href="{{ route('category.edit', $category->id) }}">edit</a>
</div>
<div>
    <form action="{{ route('category.delete', $category->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" value="delete">delete</button>
    </form>
</div>
