<?php

namespace Laraviet\Admin\Console;

use Illuminate\Console\Command;

class SeedCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'admin:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run the seeders from laraviet/admin package';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function fire()
    {
        $this->call('db:seed', ['--class' => 'Laraviet\\Admin\\Seeders\\AdminDatabaseSeeder']);
    }
}
