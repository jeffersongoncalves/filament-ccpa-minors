<?php

namespace JeffersonGoncalves\Filament\CcpaMinors\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\Filament\CcpaMinors\CcpaMinorsPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                CcpaMinorsPlugin::make(),
            ]);
    }
}
