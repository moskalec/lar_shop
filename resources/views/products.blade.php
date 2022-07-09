<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<h1>Products</h1>
<div>
    <a href="{{ route('product.create') }}">create product</a>
</div>
<a href="{{ route('category.index') }}">all categories:</a>
@if(!empty($categories))
    @foreach($categories as $category)
        <a href="{{ route('category.show', $category->id) }}">{{ $category->title }}</a>
    @endforeach
@endif
<?php $counter = 0; ?>
@if(!empty($categories))
    @foreach($categories as $category)
        <input type="checkbox"
        id="{{ $category->id }}"
        class="category_checkbox">
        <label for="{{ $category->id }}">{{ $category->title }}</label>
        <?php $counter++; ?>
    @endforeach
@endif
<div class="products_div">
    @foreach($products as $product)
        <div>
            <h2><a href="{{ route('product.show', $product->id) }}">{{ $product->title }}</a></h2>
            <p>{{ $product->description }}</p>
        </div>
    @endforeach
</div>
<script src="{{ url('js/filter.js') }}"></script>
