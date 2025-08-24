<?php

namespace Glugox\Ai;

use Glugox\Ai\Commands\AiCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
