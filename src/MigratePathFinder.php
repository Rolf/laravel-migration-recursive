<?php

namespace Rolf\MigrationRecursive;

use Illuminate\Database\Migrations\Migrator;

/**
 * Class MigratePathFinder
 * @package Rolf\MigrationRecursive
 */
class MigratePathFinder
{
    /**
     * Find all paths in current path
     *
     * @param Migrator $migrator
     * @param $path
     */
    public function getPathsInPath(Migrator $migrator, string $path)
    {
        $dirs = $this->getCountPathsInPath($path);

        foreach ($dirs as $dir) {
            $migrator->path($dir);

            if (!empty($this->getCountPathsInPath($dir))) {
                $this->getPathsInPath($migrator, $dir);
            }
        }
    }

    /**
     * Get count paths in current path
     *
     * @param $dir
     */
    public function getCountPathsInPath(string $dir)
    {
        $dirs = glob($dir . '/*' , GLOB_ONLYDIR);

        if (count($dirs) == 0) {return;}

        return $dirs;
    }
}
