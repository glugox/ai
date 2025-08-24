<?php

namespace Glugox\Ai;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Glugox\Ai\Commands\AiCommand;

class AiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('ai')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_ai_table')
            ->hasCommand(AiCommand::class);
    }
}
