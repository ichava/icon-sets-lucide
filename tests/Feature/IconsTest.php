<?php

declare(strict_types=1);

use Simtabi\Laranail\Ichava\Services\IconRegistry;
use Simtabi\Laranail\Ichava\IconSetsLucide\Enums\Variant;
use Simtabi\Laranail\Ichava\IconSetsLucide\Constants\IconsConstants;
use Simtabi\Laranail\Ichava\IconSetsLucide\Providers\IconsServiceProvider;

it(description: 'boots the provider without error', closure: function () {
    $providers = array_keys($this->app->getLoadedProviders());

    expect($providers)->toContain(IconsServiceProvider::class);
});

it(description: 'resolves constants from config json', closure: function () {
    expect(IconsConstants::getVendorPackage())->toBe('ichava/icon-sets-lucide')
        ->and(IconsConstants::getTitle())->toBe('Lucide Icons')
        ->and(IconsConstants::getPrefix())->toBe('lucide')
        ->and(IconsConstants::getDefaultVariant())->toBeNull();
});

it(description: 'uses the config prefix in enum class helpers', closure: function () {
    expect(Variant::DEFAULT->getClass())->toBe('lucide-default');
});

it(description: 'treats the one flat variant as the default, at the files root', closure: function () {
    expect(Variant::default())->toBe(Variant::DEFAULT)
        ->and(Variant::DEFAULT->isDefault())->toBeTrue()
        ->and(Variant::DEFAULT->getPath())->toBe(IconsConstants::getSvgPath())
        ->and(is_dir(Variant::DEFAULT->getPath()))->toBeTrue();
});

it(description: 'ships every icon flat under files/', closure: function () {
    $files = dirname(__DIR__, 2) . '/resources/assets/svg/files';

    expect(glob($files . '/*', GLOB_ONLYDIR) ?: [])->toBe([], 'a flat pack has no folders under files/')
        ->and(count(glob($files . '/*.svg') ?: []))->toBe(2313);
});

it(description: 'picks up the package in the icon registry', closure: function () {
    $registry = $this->app->make(IconRegistry::class);

    expect($registry->isRegistered('ichava/icon-sets-lucide'))->toBeTrue(
        'IconRegistry should have ichava/icon-sets-lucide registered after boot.',
    );
});
