<?php 

namespace webdev\Test;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{
    public function testCounter() {
        $counter = new Counter();

        $counter->increment();
        Assert::assertEquals(1, $counter->getCounter());

        $counter->increment();
        $this::assertEquals(2, $counter->getCounter());

        $counter->increment();
        self::assertEquals(3, $counter->getCounter());
    }

    /**
     * @test
     */
    public function increament()
    {
        // skip test
        self::markTestSkipped("Masih ada erorr");

        $counter = new Counter();

        $counter->increment();
        Assert::assertEquals(1, $counter->getCounter());
    }

    public function testFirst()
    {
        $counter = new Counter();
        $counter->increment();
        $this->assertEquals(1, $counter->getCounter());

        return $counter;
    }

    /** 
     * @depends testFirst 
    */
    public function testSecond(Counter $counter)
    {
        $counter->increment();
        $this->assertEquals(2, $counter->getCounter());
    }

    /**
     * @requires PHP >= 8
     * @requires OSFAMILY Linux
     */
    public function testOnlyForLinuxAndPHP8()
    {
        self::assertTrue(true, "Only For Linux and PHP 8");
    }



}
