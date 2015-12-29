<?php

namespace Laraviet\Admin\Validation\User;

use Laraviet\Admin\Validation\Validator;

class Create extends Validator
{
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:20',
        ];
    }
}
