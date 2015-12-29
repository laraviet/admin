<?php

namespace Laraviet\Admin\Validation\Role;

use Laraviet\Admin\Validation\Validator;

class Create extends Validator
{
    public function rules()
    {
        return [
            'name' => 'required',
            'slug' => 'required|unique:roles,slug',
        ];
    }
}
