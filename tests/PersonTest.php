<?php 

namespace webdev\Test;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testSuccess()
    {
        $person = new Person("Ardi");
        self::assertEquals("Hello Saeful, my name is Ardi", $person->sayHello("Saeful"));
    }

    public function testException()
    {
        $person = new Person("Ardi");
        $this->expectException(\exception::class);
        $person->sayHello(null);
    }

    public function testGoodbyeSuccess()
    {
        $person = new Person("Ardi");
        $this->expectOutputString("Good bye Saeful" . PHP_EOL);
        $person->sayGoodBye("Saeful");
    }
}
