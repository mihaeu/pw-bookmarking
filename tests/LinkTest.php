<?php declare(strict_types = 1);

/**
 * @covers Link
 */
class LinkTest extends PHPUnit_Framework_TestCase
{
    public function testPrints()
    {
        $link = new Link('http://google.com/');
        $this->assertEquals('http://google.com/', $link);
    }

    public function testUrlHasToBeValid()
    {
        $this->setExpectedException(InvalidArgumentException::class, 'Invalid url');
        new Link('bad');
    }
}

