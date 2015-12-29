<?php

namespace Laraviet\Admin\Validation\Category;

use Laraviet\Admin\Validation\Validator;
use Illuminate\Support\Facades\Request;

class Update extends Validator
{
    public function rules()
    {
        return [
            'name' => 'required',
            'slug' => 'required|unique:categories,slug,'.Request::segment(3),
        ];
    }
}
