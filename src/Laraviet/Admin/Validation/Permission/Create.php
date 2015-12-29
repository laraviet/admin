<?php

namespace Laraviet\Admin\Validation\Permission;

use Laraviet\Admin\Validation\Validator;

class Create extends Validator
{
    public function rules()
    {
        return [
            'name' => 'required',
            'slug' => 'required|unique:permissions,slug',
        ];
    }
}
