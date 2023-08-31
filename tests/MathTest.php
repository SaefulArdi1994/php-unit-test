<?php 

namespace webdev\Test;

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testManual()
    {
        self::assertEquals(10, Math::sum([5,5]));
        self::assertEquals(20, Math::sum([4,4,4,4,4]));
        self::assertEquals(30, Math::sum([6,6,6,6,6]));
    }

    /**
     * @dataProvider MathSumData
     */
    public function testDataProvider(array $value, int $expected)
    {
        self::assertEquals($expected, Math::sum($value));
    }

    public function mathSumData()
    {
        return [
            [[5,5], 10],
            [[4,4,4,4,4], 20],
            [[4,4,4,], 12],
        ];
    }

    /**
     * @testWith [[5,5], 10]
     *              [[4,4], 8]
     *              [[3,3], 6]
     */

     public function testWith(array $values, int $expected)
     {
        self::assertEquals($expected, Math::sum($values));
     }
}
