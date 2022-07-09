<?php

namespace App\Http\Controllers\Product;

use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;

class UpdateController extends BaseController
{
    public function __invoke(Product $product, UpdateRequest $request)
    {
        $data = $request->validated();
        $this->service->update($data, $product);

        return redirect()->route('product.show', $product->id);
    }
}
