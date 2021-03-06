<?php

namespace Laraviet\Admin\Composers;

use Laraviet\Admin\Entities\Role;

class UserFormComposer
{
    public function compose($view)
    {
        $roles = Role::lists('name', 'id');

        $view->with(compact('roles'));
    }
}
