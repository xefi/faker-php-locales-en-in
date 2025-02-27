<?php

namespace Xefi\Faker\EnIn;

use Xefi\Faker\EnIn\Extensions\AddressExtension;
use Xefi\Faker\EnIn\Extensions\ColorsExtension;
use Xefi\Faker\EnIn\Extensions\CompanyExtension;
use Xefi\Faker\EnIn\Extensions\FinancialExtension;
use Xefi\Faker\EnIn\Extensions\PersonExtension;
use Xefi\Faker\Providers\Provider;

class FakerEnInServiceProvider extends Provider
{
    public function boot(): void
    {
        $this->extensions([
            AddressExtension::class,
            ColorsExtension::class,
            CompanyExtension::class,
            FinancialExtension::class,
            PersonExtension::class,
        ]);
    }
}
