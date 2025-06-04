<?php

namespace Unit;

use Random\Randomizer;
use Xefi\Faker\Container\Container;
use Xefi\Faker\EnIn\Extensions\CompanyExtension;
use Xefi\Faker\EnIn\Tests\Unit\TestCase;

final class CompanyExtensionTest extends TestCase
{
    protected array $companies = [];

    protected function setUp(): void
    {
        parent::setUp();

        $companyExtension = new CompanyExtension(new Randomizer());
        $this->companies = (new \ReflectionClass($companyExtension))->getProperty('companies')->getValue($companyExtension);
    }

    public function testGstin()
    {
        for ($i = 0; $i < 1000; $i++) {
            $result = $this->faker->gstin();

            $this->assertMatchesRegularExpression('/^\d{2}[A-Z]{5}\d{4}[A-Z][A-Z\d][Z][A-Z\d]$/', $result);
        }
    }

    public function testCompany()
    {
        $results = [];
        for ($i = 0; $i < count($this->companies); $i++) {
            $results[] = $this->faker->unique()->company();
        }

        $this->assertEqualsCanonicalizing(
            $this->companies,
            $results
        );
    }
}
