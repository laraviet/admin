<?php

namespace Laraviet\Admin\Providers;

use Illuminate\Support\ServiceProvider;

class ConsoleServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * The available command shortname.
     *
     * @var array
     */
    protected $commands = [
        'Seed',
        'Refresh',
        'Install',
        'Migration',
        'CreateUser',
    ];

    /**
     * Register the commands.
     */
    public function register()
    {
        foreach ($this->commands as $command) {
            $this->commands('Laraviet\\Admin\\Console\\'.$command.'Command');
        }
    }

    /**
     * @return array
     */
    public function provides()
    {
        $provides = [];

        foreach ($this->commands as $command) {
            $provides[] = 'Laraviet\\Admin\\Console\\'.$command.'Command';
        }

        return $provides;
    }
}
