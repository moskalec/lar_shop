<?php

namespace App\Http\Controllers\Category;

use App\Http\Requests\Product\UpdateRequest;
use App\Models\Category;

class UpdateController extends BaseController
{
    public function __invoke(Category $category, UpdateRequest $request)
    {
        $data = $request->validated();
        $this->service->update($data, $category);

        return redirect()->route('category.show', $category->id);
    }
}
