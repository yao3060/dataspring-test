<?php

use PHPUnit\Framework\TestCase;

class MyGreeterClientTest extends TestCase
{
    protected $greeter;

    protected function setUp(): void
    {
        $this->greeter = new \MyGreeter\Client();
    }

    public function testInstance()
    {
        $this->assertEquals(get_class($this->greeter), 'MyGreeter\Client');
    }

    public function testGetGreeting()
    {
        $this->assertTrue(strlen($this->greeter->getGreeting()) > 0);
    }
}
