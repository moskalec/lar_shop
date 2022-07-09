<div>
    <form action="{{ route('product.update', $product->id) }}" method="post">
        @csrf
        @method('patch')
        <div>
            <label for=""title>product title</label>
            <input id="title" name="title" type="text" placeholder="title" value="{{ $product->title }}">
        </div>
        <div>
            <label for=""description>product description</label>
            <textarea id="description" name="description" type="text" placeholder="description">{{ $product->description }}</textarea>
        </div>
        <div>
            <label for="category">category</label>
            <select name="category_id" id="category">
                @foreach($categories as $category)
                    <option
                        {{ $category->id === $product->category->id ? 'selected' : '' }}
                        value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">update</button>
    </form>
</div>
