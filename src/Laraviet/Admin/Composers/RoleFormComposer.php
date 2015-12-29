<?php

namespace Laraviet\Admin\Composers;

use Laraviet\Admin\Entities\Permission;

class RoleFormComposer
{
    public function compose($view)
    {
        $permissions = Permission::lists('name', 'id');

        $view->with(compact('permissions'));
    }
}
