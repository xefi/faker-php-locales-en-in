<?php

namespace Xefi\Faker\EnIn\Tests\Unit;

final class PhoneExtensionTest extends TestCase
{
    public function testPhoneNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertMatchesRegularExpression('/^0((11|22|33|40|44|80)\d{8}|[6-9]\d{9})$/', $this->faker->phoneNumber());
        }
    }

    public function testLandlinePhoneNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertMatchesRegularExpression('/^0(11|22|33|40|44|80)-\d{4}-\d{4}$/', $this->faker->dashedLandlinePhoneNumber());
        }
    }

    public function testCellPhoneNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertMatchesRegularExpression('/^0[6-9]\d{4} \d{5}$/', $this->faker->spacedCellPhoneNumber());
        }
    }

    public function testIndicatoredPhoneNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertMatchesRegularExpression('/^\+91((11|22|33|40|44|80)\d{8}|[6-9]\d{9})$/', $this->faker->indicatoredPhoneNumber());
        }
    }

    public function testIndicatorIsSeparatedFromTheNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertStringStartsWith('+91 ', $this->faker->spacedIndicatoredPhoneNumber());
            $this->assertStringStartsWith('+91-', $this->faker->dashedIndicatoredPhoneNumber());
            $this->assertStringStartsWith('+91.', $this->faker->dottedIndicatoredPhoneNumber());
            $this->assertMatchesRegularExpression('/^\+91\d+$/', $this->faker->indicatoredPhoneNumber());
        }
    }
}
