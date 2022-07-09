<?php

namespace App\Services\Product;

use App\Models\Product;

class Service
{
    public function store($data)
    {
        Product::create($data);
    }
    public function update($data, $product)
    {
        $product->update($data);
    }
}
