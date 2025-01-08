<?php

namespace Xefi\Faker\EnIn\Extensions;

use Xefi\Faker\Extensions\Extension;

class AddressExtension extends Extension
{
    protected $states = [
        'Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar', 'Chhattisgarh', 'Goa', 'Gujarat', 'Haryana',
        'Himachal Pradesh', 'Jharkhand', 'Karnataka', 'Kerala', 'Madhya Pradesh', 'Maharashtra', 'Manipur',
        'Meghalaya', 'Mizoram', 'Nagaland', 'Odisha', 'Punjab', 'Rajasthan', 'Sikkim', 'Tamil Nadu',
        'Telangana', 'Tripura', 'Uttar Pradesh', 'Uttarakhand', 'West Bengal',
        'Andaman and Nicobar Islands', 'Chandigarh', 'Dadra and Nagar Haveli and Daman and Diu', 'Delhi',
        'Jammu and Kashmir', 'Ladakh', 'Lakshadweep', 'Puducherry',
    ];

    protected $streetSuffixes = [
        'Road', 'Street', 'Avenue', 'Lane', 'Circle', 'Park', 'Boulevard', 'Drive', 'Path', 'Gali', 'Marg',
        'Chowk', 'Nagar', 'Vihar', 'Pur', 'Bagh', 'Peth', 'Market', 'Chowraha', 'Place', 'Hills',
    ];

    protected $streetNames = [
        'MG', 'Nehru', 'Gandhi', 'Rajpath', 'Ring', 'High', 'Church',
        'Residency', 'Connaught', 'Brigade', 'Banjara', 'Park', 'Marine',
    ];

    protected $cities = [
        'Mumbai', 'Delhi', 'Bangalore', 'Hyderabad', 'Ahmedabad', 'Chennai', 'Kolkata', 'Surat', 'Pune', 'Jaipur',
        'Lucknow', 'Kanpur', 'Nagpur', 'Indore', 'Bhopal', 'Patna', 'Ludhiana', 'Agra', 'Nashik', 'Vadodara',
    ];

    public function state(): string
    {
        return $this->pickArrayRandomElement($this->states);
    }

    public function houseNumber(): int
    {
        return $this->randomizer->getInt(1, 500);
    }

    public function streetName(): string
    {
        $streetName = $this->pickArrayRandomElement($this->streetNames);
        $streetSuffix = $this->pickArrayRandomElement($this->streetSuffixes);
        return sprintf('%s %s', $streetSuffix, $streetName);
    }

    public function streetAddress(): string
    {
        return sprintf('%d, %s', $this->houseNumber(), $this->streetName());
    }

    public function zipCode(): string
    {
        return sprintf('%06d', $this->randomizer->getInt(0, 999999));
    }

    public function city(): string
    {
        return $this->pickArrayRandomElement($this->cities);
    }

    public function fullAddress(): string
    {
        $street = $this->streetAddress();
        $city = $this->city();
        $state = $this->state();
        $zipCode = $this->zipCode();

        return sprintf('%s, %s, %s %s', $street, $city, $state, $zipCode);
    }
}
