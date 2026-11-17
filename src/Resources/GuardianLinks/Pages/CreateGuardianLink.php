<?php

namespace JeffersonGoncalves\Filament\CcpaMinors\Resources\GuardianLinks\Pages;

use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use JeffersonGoncalves\CcpaMinors\MinorsManager;
use JeffersonGoncalves\Filament\CcpaMinors\CcpaMinorsPlugin;
use JeffersonGoncalves\Filament\CcpaMinors\Resources\GuardianLinks\GuardianLinkResource;

class CreateGuardianLink extends CreateRecord
{
    protected static string $resource = GuardianLinkResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $model = CcpaMinorsPlugin::get()->getSubjectModel();

        return app(MinorsManager::class)->link(
            $model::query()->findOrFail($data['minor_id']),
            $model::query()->findOrFail($data['guardian_id']),
            filled($data['relationship'] ?? null) ? $data['relationship'] : null,
            (bool) ($this->data['verified'] ?? false),
        );
    }

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }
}
