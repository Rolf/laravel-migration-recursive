<?php

namespace Rolf\MigrationRecursive\Commands;

use Rolf\MigrationRecursive\MigratePathFinder;

class MigrateCommand extends \Illuminate\Database\Console\Migrations\MigrateCommand
{
    public function handle()
    {
        (new MigratePathFinder())->getPathsInPath($this->migrator, $this->getMigrationPath());

        parent::handle();
    }
}
