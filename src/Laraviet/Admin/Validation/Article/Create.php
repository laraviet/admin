<?php

namespace Laraviet\Admin\Validation\Article;

use Laraviet\Admin\Validation\Validator;

class Create extends Validator
{
    protected $rules = [
        'title' => 'required',
        'slug' => 'required|unique:articles,slug',
        'body' => 'required',
        'image' => 'required|image',
    ];

    public function rules()
    {
        if (isOnPages()) {
            unset($this->rules['image']);
        }

        return $this->rules;
    }
}
