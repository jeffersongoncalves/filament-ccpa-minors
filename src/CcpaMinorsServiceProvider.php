<?php

namespace JeffersonGoncalves\Filament\CcpaMinors;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class CcpaMinorsServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-ccpa-minors';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations();
    }
}
