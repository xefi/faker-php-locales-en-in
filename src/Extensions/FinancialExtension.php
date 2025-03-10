<?php

namespace Xefi\Faker\EnIn\Extensions;

use Xefi\Faker\Extensions\FinancialExtension as BaseFinancialExtension;

class FinancialExtension extends BaseFinancialExtension
{
    public function getLocale(): string|null
    {
        return 'en_IN';
    }

    public function iban(?string $countryCode = null, ?string $format = null): string
    {
        if ($countryCode === null) {
            $countryCode = 'IN';
        }

        if ($format === null) {
            $format = sprintf(
                '%s%s%s%s',
                str_repeat('{a}', 2),
                str_repeat('{d}', 2),
                str_repeat('{d}', 5),
                str_repeat('{d}', 15)
            );
        }

        return parent::iban($countryCode, $format);
    }

    public function ifsc(): string
    {
        $bankCode = strtoupper($this->randomizer->getBytesFromString(implode(range('A', 'Z')), 4));
        $branchCode = $this->randomizer->getInt(1000000, 9999999);

        return sprintf('%s%07d', $bankCode, $branchCode);
    }

    public function pan(): string
    {
        $letters = strtoupper($this->randomizer->getBytesFromString(implode(range('A', 'Z')), 5));
        $digits = $this->randomizer->getInt(1000, 9999);
        $suffix = strtoupper($this->randomizer->getBytesFromString(implode(range('A', 'Z')), 1));

        return sprintf('%s%04d%s', $letters, $digits, $suffix);
    }
}