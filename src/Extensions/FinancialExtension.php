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
            // Format d'IBAN fictif pour l'Inde (INXX12345678901234567890)
            $format = sprintf(
                '%s%s%s%s',
                str_repeat('{a}', 2), // 2 lettres du pays (IN)
                str_repeat('{d}', 2), // 2 chiffres de contrôle
                str_repeat('{d}', 5), // 5 chiffres pour l'identifiant de la banque
                str_repeat('{d}', 15) // 15 chiffres pour le numéro de compte
            );
        }

        return parent::iban($countryCode, $format);
    }

    public function ifsc(): string
    {
        // Format standard de l'IFSC : 4 lettres + 7 chiffres
        $bankCode = strtoupper($this->randomizer->getBytesFromString(implode(range('A', 'Z')), 4)); // 4 lettres
        $branchCode = $this->randomizer->getInt(1000000, 9999999); // 7 chiffres

        return sprintf('%s%07d', $bankCode, $branchCode);
    }

    public function pan(): string
    {
        // Format standard du PAN : 5 lettres + 4 chiffres + 1 lettre
        $letters = strtoupper($this->randomizer->getBytesFromString(implode(range('A', 'Z')), 5));
        $digits = $this->randomizer->getInt(1000, 9999);
        $suffix = strtoupper($this->randomizer->getBytesFromString(implode(range('A', 'Z')), 1));

        return sprintf('%s%04d%s', $letters, $digits, $suffix);
    }
}