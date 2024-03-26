<?php


namespace Agung\Test;


use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{

    private Person $person;

    protected function setUp(): void
    {

    }

    /**
     * @before
     */
    public function createPerson()
    {
        $this->person = new Person("Vior");
    }

    public function testSuccess()
    {
        self::assertEquals("Hello Agung, my name is Vior", $this->person->sayHello("Agung"));
    }

    public function testException()
    {
        $this->expectException(\Exception::class);
        $this->person->sayHello(null);
    }

    public function testGoodByeSuccess()
    {
        $this->expectOutputString("Good bye Agung" . PHP_EOL);
        $this->person->sayGoodBye("Vior");
    }


}