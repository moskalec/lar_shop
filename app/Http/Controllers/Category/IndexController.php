<?php

namespace App\Http\Controllers\Category;

use App\Http\Requests\Product\FilterRequest;
use App\Models\Category;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        $categories = Category::all();

        return view('categories', compact('categories'));
    }
}
