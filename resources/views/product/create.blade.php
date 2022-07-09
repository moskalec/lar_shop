<div>
    <form action="{{ route('product.store') }}" method="post">
        @csrf
        <div>
            <label for=""title>product title</label>
            <input id="title" name="title" type="text" placeholder="title" value="{{ old('title') }}">
            @error('title')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="description">product description</label>
            <textarea id="description" name="description" type="text" placeholder="description">{{ old('description') }}</textarea>
            @error('description')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="category">category</label>
                <select name="category_id" id="category">
                    @foreach($categories as $category)
                        <option
                            {{ old('category_id') == $category->id ? 'selected' : '' }}
                            value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            @error('category')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <button type="submit">create</button>
    </form>
</div>

