<div>
    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <div>
            <label for=""title>category title</label>
            <input id="title" name="title" type="text" placeholder="title" value="{{ old('title') }}">
            @error('title')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="description">category description</label>
            <textarea id="description" name="description" type="text" placeholder="description">{{ old('description') }}</textarea>
            @error('description')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <button type="submit">create</button>
    </form>
</div>

