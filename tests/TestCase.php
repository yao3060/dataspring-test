<?php

abstract class TestCase extends \PHPUnit\Framework\TestCase
{

    protected function setUp(): void
    {
        date_default_timezone_set($_ENV['TIMEZONE']);
    }

    public function testTimezone()
    {
        $this->assertEquals(date_default_timezone_get(), $_ENV['TIMEZONE']);
    }
}
