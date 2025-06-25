<?php

namespace Xefi\Faker\EnIn\Tests\Unit;

use Random\Randomizer;
use ReflectionClass;
use Xefi\Faker\EnIn\Extensions\AddressExtension;

final class AddressExtensionTest extends TestCase
{
    protected array $states = [];
    protected array $regions = [];
    protected array $streetNames = [];
    protected array $streetSuffixes = [];
    protected array $cities = [];

    protected function setUp(): void
    {
        parent::setUp();

        $addressExtension = new AddressExtension(new Randomizer());
        $this->cities = (new ReflectionClass($addressExtension))->getProperty('cities')->getValue($addressExtension);
        $this->states = (new ReflectionClass($addressExtension))->getProperty('states')->getValue($addressExtension);
        $this->streetNames = (new ReflectionClass($addressExtension))->getProperty('streetNames')->getValue($addressExtension);
        $this->streetSuffixes = (new ReflectionClass($addressExtension))->getProperty('streetSuffixes')->getValue($addressExtension);
    }

    public function testState(): void
    {
        $results = [];
        for ($i = 0; $i < count($this->states); $i++) {
            $results[] = $this->faker->unique()->state();
        }

        $this->assertEqualsCanonicalizing($this->states, $results);
    }

    public function testHouseNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $houseNumber = $this->faker->unique()->houseNumber();
            $this->assertGreaterThanOrEqual(1, $houseNumber);
            $this->assertLessThanOrEqual(500, $houseNumber);
        }
    }

    public function testStreetName(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $result = $this->faker->unique()->streetName();

            [$streetSuffix, $streetName] = explode(' ', $result);
            $this->assertContains($streetSuffix, $this->streetSuffixes);
            $this->assertContains($streetName, $this->streetNames);
        }
    }

    public function testStreetAddress(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $result = $this->faker->unique()->streetAddress();

            [$houseNumber, $streetSuffix, $streetName] = explode(' ', $result);
            $houseNumber = trim($houseNumber, ',');

            $this->assertGreaterThanOrEqual(1, $houseNumber);
            $this->assertLessThanOrEqual(500, $houseNumber);
            $this->assertContains($streetSuffix, $this->streetSuffixes);
            $this->assertContains($streetName, $this->streetNames);
        }
    }

    public function testZipCode(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $zipCode = $this->faker->unique()->zipCode();

            $this->assertMatchesRegularExpression('/^\d{6}$/', $zipCode);
        }
    }

    public function testCity(): void
    {
        $results = [];
        for ($i = 0; $i < count($this->cities); $i++) {
            $results[] = $this->faker->unique()->city();
        }

        $this->assertEqualsCanonicalizing(
            $this->cities,
            $results
        );
    }

    public function testFullAddress(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $address = $this->faker->unique()->fullAddress();

            $this->assertMatchesRegularExpression('/^\d{1,3}, [\w ]+, [\w ]+, [\w ]+ \d{6}$/', $address);
        }
    }
}
