<?php

namespace Rolf\MigrationRecursive;

use Illuminate\Database\MigrationServiceProvider;
use Rolf\MigrationRecursive\Commands\MigrateCommand;
use Rolf\MigrationRecursive\Commands\ResetCommand;
use Rolf\MigrationRecursive\Commands\RollbackCommand;
use Rolf\MigrationRecursive\Commands\StatusCommand;

class MigrationRecursiveServiceProvider extends MigrationServiceProvider
{
    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerMigrateCommand()
    {
        $this->app->singleton('command.migrate', function ($app) {
            return new MigrateCommand($app['migrator']);
        });
    }

    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerMigrateResetCommand()
    {
        $this->app->singleton('command.migrate.reset', function ($app) {
            return new ResetCommand($app['migrator']);
        });
    }

    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerMigrateRollbackCommand()
    {
        $this->app->singleton('command.migrate.rollback', function ($app) {
            return new RollbackCommand($app['migrator']);
        });
    }

    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerMigrateStatusCommand()
    {
        $this->app->singleton('command.migrate.status', function ($app) {
            return new StatusCommand($app['migrator']);
        });
    }
}
