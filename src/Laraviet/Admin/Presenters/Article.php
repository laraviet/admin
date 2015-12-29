<?php

namespace Laraviet\Admin\Presenters;

use Pingpong\Presenters\Presenter;

class Article extends Presenter
{
    public function image_path()
    {
        return public_path("images/articles/{$this->entity->image}");
    }
}
