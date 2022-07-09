<div>
    <form action="{{ route('category.update', $category->id) }}" method="post">
        @csrf
        @method('patch')
        <div>
            <label for=""title>category title</label>
            <input id="title" name="title" type="text" placeholder="title" value="{{ $category->title }}">
        </div>
        <div>
            <label for=""description>category description</label>
            <textarea id="description" name="description" type="text" placeholder="description">{{ $category->description }}</textarea>
        </div>
        <button type="submit">update</button>
    </form>
</div>
