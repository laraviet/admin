<?php

namespace Laraviet\Admin\Repositories\Pages;

use Laraviet\Admin\Repositories\Repository;

interface PageRepository extends Repository
{
    public function getPage();
}
