<h1>{{ $product->title }}</h1>
<p>{{ $product->description }}</p>
@isset($product->category->title)
    <span>category: {{ $product->category->title }}</span>
@endisset
<div>
    <a href="{{ route('product.edit', $product->id) }}">edit</a>
</div>
<div>
    <form action="{{ route('product.delete', $product->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" value="delete">delete</button>
    </form>
</div>
