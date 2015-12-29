<?php

namespace Laraviet\Admin\Repositories\Articles;

use Laraviet\Admin\Repositories\Repository;

interface ArticleRepository extends Repository
{
    public function getArticle();
}
