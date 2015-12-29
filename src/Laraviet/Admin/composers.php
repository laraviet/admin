<?php

View::composer('admin::articles.form', 'Laraviet\Admin\Composers\ArticleFormComposer');
View::composer('admin::*', 'Laraviet\Admin\Composers\LayoutComposer');
View::composer('admin::users.form', 'Laraviet\Admin\Composers\UserFormComposer');
View::composer('admin::roles.form', 'Laraviet\Admin\Composers\RoleFormComposer');
View::composer('admin::settings', 'Laraviet\Admin\Composers\SettingFormComposer');
