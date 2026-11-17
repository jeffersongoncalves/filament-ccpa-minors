<?php

use JeffersonGoncalves\CcpaMinors\Enums\AssuranceMethod;
use JeffersonGoncalves\CcpaMinors\Facades\CcpaMinors;
use JeffersonGoncalves\CcpaMinors\Models\GuardianLink;
use JeffersonGoncalves\Filament\CcpaMinors\CcpaMinorsPlugin;
use JeffersonGoncalves\Filament\CcpaMinors\Resources\AgeAssurances\Pages\ListAgeAssurances;
use JeffersonGoncalves\Filament\CcpaMinors\Resources\GuardianLinks\GuardianLinkResource;
use JeffersonGoncalves\Filament\CcpaMinors\Resources\GuardianLinks\Pages\CreateGuardianLink;
use JeffersonGoncalves\Filament\CcpaMinors\Resources\GuardianLinks\Pages\ListGuardianLinks;
use JeffersonGoncalves\Filament\CcpaMinors\Resources\OptIns\Pages\ListOptIns;
use JeffersonGoncalves\Filament\CcpaMinors\Tests\Fixtures\TestUser;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(TestUser::create(['name' => 'DPO', 'email' => 'dpo@example.com']));
    $this->child = TestUser::create(['name' => 'Emma']);
    $this->mother = TestUser::create(['name' => 'Anna']);
});

it('lists age checks with age and method, and filters those under 16', function () {
    $child = CcpaMinors::assure($this->child, 12, AssuranceMethod::StoreSignal);
    $adult = CcpaMinors::assure($this->mother, 40, AssuranceMethod::Document);

    Livewire::test(ListAgeAssurances::class)
        ->assertCanSeeTableRecords([$child, $adult])
        ->assertSee('Emma (#2)')
        ->assertSee('App store signal')
        ->filterTable('under_opt_in_age', true)
        ->assertCanSeeTableRecords([$child])
        ->assertCanNotSeeTableRecords([$adult]);
});

it('links a verified parent, who can then opt in for a child under 13', function () {
    CcpaMinors::assure($this->child, 12, AssuranceMethod::Document);

    Livewire::test(CreateGuardianLink::class)
        ->fillForm(['minor_id' => $this->child->id, 'guardian_id' => $this->mother->id, 'relationship' => 'mother', 'verified' => true])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(GuardianLink::sole()->relationship)->toBe('mother')
        ->and(CcpaMinors::hasGuardian($this->child))->toBeTrue();

    CcpaMinors::optIn($this->child, GuardianLink::sole());

    expect(CcpaMinors::allowsSaleOrSharing($this->child))->toBeTrue();
});

it('does not link someone to themselves', function () {
    Livewire::test(CreateGuardianLink::class)
        ->fillForm(['minor_id' => $this->child->id, 'guardian_id' => $this->child->id])
        ->call('create')
        ->assertHasFormErrors(['guardian_id' => 'different']);
});

it('verifies and revokes a link', function () {
    $link = CcpaMinors::link($this->child, $this->mother);

    Livewire::test(ListGuardianLinks::class)
        ->assertSee('Pending verification')
        ->callTableAction('verify', $link);

    expect($link->fresh()->isActive())->toBeTrue();

    Livewire::test(ListGuardianLinks::class)->callTableAction('revoke', $link);

    expect($link->fresh()->revoked_at)->not->toBeNull();
});

it('lists opt-ins and revokes them', function () {
    CcpaMinors::assure($this->child, 14, AssuranceMethod::StoreSignal);
    $optIn = CcpaMinors::optIn($this->child);

    Livewire::test(ListOptIns::class)
        ->assertCanSeeTableRecords([$optIn])
        ->assertSee('The consumer (13 to 15)')
        ->callTableAction('revoke', $optIn);

    expect(CcpaMinors::allowsSaleOrSharing($this->child))->toBeFalse();
});

it('applies the fluent plugin options', function () {
    CcpaMinorsPlugin::get()->navigationGroup('CCPA')->subjectTitleAttribute('email');

    expect(GuardianLinkResource::getNavigationGroup())->toBe('CCPA')
        ->and(CcpaMinorsPlugin::get()->getSubjectModel())->toBe(TestUser::class);
});
