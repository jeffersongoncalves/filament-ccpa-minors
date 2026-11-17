<?php

namespace JeffersonGoncalves\Filament\CcpaMinors;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CcpaMinorsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-ccpa-minors')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
