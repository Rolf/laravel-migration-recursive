<?php

namespace Rolf\MigrationRecursive\Commands;

use Illuminate\Console\ConfirmableTrait;
use Illuminate\Database\Console\Migrations\BaseCommand;
use Illuminate\Database\Migrations\Migrator;
use Rolf\MigrationRecursive\MigratePathFinder;
use Symfony\Component\Console\Input\InputOption;

class RollbackCommand extends \Illuminate\Database\Console\Migrations\RollbackCommand
{
    public function handle()
    {
        (new MigratePathFinder())->getPathsInPath($this->migrator, $this->getMigrationPath());

        parent::handle();
    }
}
