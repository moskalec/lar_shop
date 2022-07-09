<?php

namespace App\Http\Controllers\Product;

use App\Models\Category;

class EditController extends BaseController
{
    public function __invoke(Product $product)
    {
        $categories = Category::all();
        return view('product.edit', compact('product', 'categories'));
    }
}
