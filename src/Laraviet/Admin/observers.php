<?php

Event::listen('admin::routes', 'Laraviet\Admin\Observers\RoutesObserver');

Event::listen('admin::visitors.track', 'Laraviet\Admin\Observers\VisitorObserver');

Event::listen('admin::menus', 'Laraviet\Admin\Observers\MenusObserver');
