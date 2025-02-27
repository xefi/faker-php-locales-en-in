<?php

namespace Unit;

use ReflectionClass;

final class TextExtensionTest extends \Xefi\Faker\EnIn\Tests\Unit\TestCase
{
    protected array $paragraphs = [];

    protected function setUp(): void
    {
        parent::setUp();

        $textExtension    = new \Xefi\Faker\EnIn\Extensions\TextExtension(new \Random\Randomizer());
        $this->paragraphs = (new ReflectionClass($textExtension))->getProperty('paragraphs')->getValue($textExtension);
    }

    public function testWords(): void
    {
        $sentences = array_merge(...$this->paragraphs);
        $words     = array_merge(...$sentences);
        $result    = $this->faker->words(count($words));

        $result = preg_split('/\s+/', $result);
        $words  = array_map(function ($word) { return strtolower(preg_replace('/[.,]/', '', $word)); }, $words);

        $this->assertEqualsCanonicalizing(
            $words,
            $result
        );
    }
}
