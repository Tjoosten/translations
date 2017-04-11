<?php

namespace Sijot\Translations;

use Illuminate\Support\ServiceProvider as Provider;

/**
 * Class ServiceProvider
 *
 * @package Sijot
 */
class ServiceProvider extends Provider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if (! class_exists('SeedSystemTranslations')) { // The system translation => not in the seeds dir.
            $source      = __DIR__ . '/seeds/SeedSystemTranslations.php';
            $destination = database_path('/seeds/SeedSystemTranslations.php');

            $this->publishes([$source => $destination], 'seeds');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // No function needed. Because this is mainly for the seeder files.
    }
}