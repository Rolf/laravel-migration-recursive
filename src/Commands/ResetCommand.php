<?php

namespace Rolf\MigrationRecursive\Commands;

use Illuminate\Console\ConfirmableTrait;
use Illuminate\Database\Console\Migrations\BaseCommand;
use Illuminate\Database\Migrations\Migrator;
use Rolf\MigrationRecursive\MigratePathFinder;
use Symfony\Component\Console\Input\InputOption;

class ResetCommand extends \Illuminate\Database\Console\Migrations\ResetCommand
{
    public function handle()
    {
        (new MigratePathFinder())->getPathsInPath($this->migrator, $this->getMigrationPath());

        parent::handle();
    }
}
