<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Lucide Icons -- localisable strings
|--------------------------------------------------------------------------
|
| An overlay, not a second source of truth. `name` and `description` are
| deliberately absent: IconRegistry::fromDirectory() reads those from
| resources/assets/svg/config.json, which is canonical. A non-English locale
| may add them to override; `en` must not.
|
| Variant keys match Simtabi\Laranail\Ichava\IconSetsLucide\Enums\Variant.
|
*/

return [
    'variants' => [
        'default' => 'Default',
    ],

    'variant_descriptions' => [
        'default' => 'Stroked 24px icons, 2px stroke, round caps and joins',
    ],
];
