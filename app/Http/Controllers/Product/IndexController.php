<?php

namespace App\Http\Controllers\Product;

use App\Http\Filters\ProductFilter;
use App\Http\Requests\Product\FilterRequest;
use App\Http\Resources\Product\FilteredProducts;
use App\Models\Category;
use App\Models\Product;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

        if(isset($data['category_id']))
        {
            $category_ids = explode(',', $request->category_id);
            $products = Product::whereIn('category_id', $category_ids)->get();
        } else
        {
            $products = Product::all();
        }

        $categories = Category::all();

        return view('products', compact('products', 'categories'));
    }

    public function get_filtered_products($id)
    {

        $integerIDs = array_map('intval', explode(',', $id));
        $data = Product::whereIn('category_id', $integerIDs)->get();
        echo json_encode($data);
    }

    public function fetch_all()
    {
        $data = Product::all();
        echo json_encode($data);
    }

}
