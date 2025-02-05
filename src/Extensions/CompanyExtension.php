<?php

namespace Xefi\Faker\EnIn\Extensions;

use Xefi\Faker\Extensions\Extension;

class CompanyExtension extends Extension
{
    private array $companies = [
        "Tata Industries", "Reliance Group", "Infosys Technologies",
        "Wipro Solutions", "Mahindra & Mahindra", "Adani Enterprises",
        "HCL Technologies", "Larsen & Toubro", "ICICI Bank",
        "State Bank of India", "Kotak Mahindra Bank", "HDFC Bank",
        "Bajaj Auto", "Maruti Suzuki", "Hero MotoCorp",
        "ITC Limited", "Godrej Group", "Asian Paints",
        "Sun Pharma", "Cipla Healthcare", "Dr. Reddy's Laboratories",
        "Hindustan Unilever", "Vedanta Resources", "Bharti Airtel",
        "Jio Platforms", "Zomato India", "Paytm Payments Bank",
        "Flipkart Retail", "Amazon India", "Myntra Designs",
        "Byju's Education", "Ola Cabs", "Swiggy Foods",
        "Zerodha Broking", "PhonePe Financials", "Delhivery Logistics",
        "UrbanClap Services", "Lenskart India", "MakeMyTrip",
        "PolicyBazaar Insurance", "TCS Digital", "Mindtree Technologies"
    ];

    public function gstin(): string
    {
        $stateCode = sprintf('%02d', $this->randomizer->getInt(1, 35));
        $pan = sprintf(
            '%s%04d%s',
            $this->randomizer->getBytesFromString(implode(range('A', 'Z')), 5),
            $this->randomizer->getInt(1, 9999),
            $this->randomizer->getBytesFromString(implode(range('A', 'Z')), 1)
        );
        $entityCode = $this->randomizer->getBytesFromString('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', 1); // Code d'entité
        $suffix = $this->randomizer->getInt(0, 9);

        return sprintf('%s%s%sZ%s', $stateCode, $pan, $entityCode, $suffix);
    }

    public function company(): string
    {
        return $this->pickArrayRandomElement($this->companies);
    }
}
