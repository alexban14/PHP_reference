<?php

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\TestCase;

/**
 * Example text from PHPUnit docs
 */
class DocsTests extends TestCase
{
    /**
     * Using a data provider
     */
    public static function additionalProvider(): array
    {
        return [
            [0,0,0],
            [0,1,1],
            [1,1,2],
            [1,2,4],
        ];
    }

    #[DataProvider('additionalProvider')]
    public function testAddition(int $a, int $b, int $expected): void
    {
        $this->assertSame($expected, $a + $b);
    }

    /**
     * Testing output
     * - execution of a method generates the expected output
     */
    public function testExpectFoo(): void
    {
        $this->expectOutputString('foo');

        echo 'foo';
    }

    /**
     * Test Dependencies
     *  - declaring explicit dependencies between test methods
     *
     * Producer => test method that yields its unit under test as return value
     * Consumer => test method that depends on one or more producers and their return values
     */
    public function testEmpty(): array
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack;
    }

    #[Depends('testEmpty')]
    public function testPush(array $stack): array
    {
        $stack[] = 'foo';

        $this->assertSame('foo', $stack[count($stack) - 1]);

        $this->assertNotEmpty($stack);

        return $stack;
    }

    #[Depends('testPush')]
    public function testPop(array $stack): void
    {
        $this->assertSame('foo', array_pop($stack));

        $this->assertEmpty($stack);
    }
}
