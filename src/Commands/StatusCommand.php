<?php

namespace Rolf\MigrationRecursive\Commands;

use Illuminate\Database\Console\Migrations\BaseCommand;
use Illuminate\Support\Collection;
use Illuminate\Database\Migrations\Migrator;
use Rolf\MigrationRecursive\MigratePathFinder;
use Symfony\Component\Console\Input\InputOption;

class StatusCommand extends \Illuminate\Database\Console\Migrations\StatusCommand
{
    public function handle()
    {
        (new MigratePathFinder())->getPathsInPath($this->migrator, $this->getMigrationPath());

        parent::handle();
    }
}
