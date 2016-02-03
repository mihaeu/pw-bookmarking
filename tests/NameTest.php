<?php declare(strict_types = 1);

/**
 * @covers Name
 */
class NameTest extends PHPUnit_Framework_TestCase
{
    public function testPrints()
    {
        $name = new Name('Max Mustermann');
        $this->assertEquals('Max Mustermann', $name->__toString());
    }

    public function testCannotBeEmpty()
    {
        $this->setExpectedException(InvalidArgumentException::class, 'Name cannot be empty');
        new Name('');
    }

    public function testNameIsEqual()
    {
        $name = new Name('Max Mustermann');
        $this->assertTrue($name->equals(new Name('Max Mustermann')));
    }

    public function testNameIsNotEqual()
    {
        $name = new Name('Max Mustermann');
        $this->assertFalse($name->equals(new Name('Maria Musterfrau')));
    }
}

