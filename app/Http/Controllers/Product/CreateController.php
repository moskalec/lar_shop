<?php

namespace App\Http\Controllers\Product;

use App\Models\Category;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }
}
