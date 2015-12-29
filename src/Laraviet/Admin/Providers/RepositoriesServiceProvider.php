<?php

namespace Laraviet\Admin\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    protected $entities = [
        'User',
        'Article',
        'Page',
        'Category',
        'Role',
        'Permission',
    ];

    /**
     * Register the service provider.
     */
    public function register()
    {
        foreach ($this->entities as $entity) {
            $this->{'bind'.$entity.'Repository'}();
        }
    }

    protected function bindArticleRepository()
    {
        $this->app->bind(
            'Laraviet\Admin\Repositories\Articles\ArticleRepository',
            'Laraviet\Admin\Repositories\Articles\EloquentArticleRepository'
        );
    }

    protected function bindCategoryRepository()
    {
        $this->app->bind(
            'Laraviet\Admin\Repositories\Categories\CategoryRepository',
            'Laraviet\Admin\Repositories\Categories\EloquentCategoryRepository'
        );
    }

    protected function bindUserRepository()
    {
        $this->app->bind(
            'Laraviet\Admin\Repositories\Users\UserRepository',
            'Laraviet\Admin\Repositories\Users\EloquentUserRepository'
        );
    }

    protected function bindRoleRepository()
    {
        $this->app->bind(
            'Laraviet\Admin\Repositories\Roles\RoleRepository',
            'Laraviet\Admin\Repositories\Roles\EloquentRoleRepository'
        );
    }

    protected function bindPermissionRepository()
    {
        $this->app->bind(
            'Laraviet\Admin\Repositories\Permissions\PermissionRepository',
            'Laraviet\Admin\Repositories\Permissions\EloquentPermissionRepository'
        );
    }

    protected function bindPageRepository()
    {
        $this->app->bind(
            'Laraviet\Admin\Repositories\Pages\PageRepository',
            'Laraviet\Admin\Repositories\Pages\EloquentPageRepository'
        );
    }
}
