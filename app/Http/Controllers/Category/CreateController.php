<?php

namespace App\Http\Controllers\Category;


class CreateController extends BaseController
{
    public function __invoke()
    {
        return view('category.create');//, compact('categories'));
    }
}
