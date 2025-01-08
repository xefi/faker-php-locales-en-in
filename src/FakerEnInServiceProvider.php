<?php

namespace Xefi\Faker\EnIn;

use Xefi\Faker\EnIn\Extensions\AddressExtension;
use Xefi\Faker\EnIn\Extensions\ColorsExtension;
use Xefi\Faker\Providers\Provider;

class FakerEnInServiceProvider extends Provider
{
    public function boot(): void
    {
        $this->extensions([
            AddressExtension::class,
            ColorsExtension::class,
        ]);
    }
}
