<?php

use PHPUnit\Framework\TestCase;

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

date_default_timezone_set($_ENV['TIMEZONE']);


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

    public function testGetGreetingContent()
    {
        $testArray = array("Good morning",   "Good afternoon", 'Good evening');
        $value = $this->greeter->getGreeting();
        $this->assertContains($value, $testArray, "testArray doesn't contains value as value");
    }
}
