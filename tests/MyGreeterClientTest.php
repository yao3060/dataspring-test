<?php
class MyGreeterClientTest extends TestCase
{
    protected $greeter;

    protected function setUp(): void
    {
        parent::setUp();
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
        $testArray = \MyGreeter\Status::toArray();
        $value = $this->greeter->getGreeting();
        $this->assertContains($value, $testArray, "testArray doesn't contains value as value");
    }
}
