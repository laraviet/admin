<?php

namespace Laraviet\Admin\Composers;

use Laraviet\Admin\Entities\Category;

class ArticleFormComposer
{
    public function compose($view)
    {
        $categories = Category::lists('name', 'id');

        $view->with(compact('categories'));
    }
}
