<?php

namespace Laraviet\Admin\Validation\Role;

use Laraviet\Admin\Validation\Validator;
use Illuminate\Support\Facades\Request;

class Update extends Validator
{
    public function rules()
    {
        return [
            'name' => 'required',
            'slug' => 'required|unique:roles,slug,'.Request::segment(3),
        ];
    }
}
