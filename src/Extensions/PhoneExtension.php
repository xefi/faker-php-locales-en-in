<?php

namespace Xefi\Faker\EnIn\Extensions;

use Xefi\Faker\Extensions\PhoneExtension as BasePhoneExtension;

class PhoneExtension extends BasePhoneExtension
{
    public string $defaultPrefix = '0';

    public string $indicator = '+91';

    /**
     * Get the locale handled by this extension.
     *
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return 'en_IN';
    }

    protected array $landlineFormats = [
        '11{separator}{d}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '22{separator}{d}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '33{separator}{d}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '40{separator}{d}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '44{separator}{d}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '80{separator}{d}{d}{d}{d}{separator}{d}{d}{d}{d}',
    ];

    protected array $cellFormats = [
        '6{d}{d}{d}{d}{separator}{d}{d}{d}{d}{d}',
        '7{d}{d}{d}{d}{separator}{d}{d}{d}{d}{d}',
        '8{d}{d}{d}{d}{separator}{d}{d}{d}{d}{d}',
        '9{d}{d}{d}{d}{separator}{d}{d}{d}{d}{d}',
    ];
}
