<?php declare(strict_types = 1);

/**
 * @covers CategoryName
 */
class CategoryNameTest extends PHPUnit_Framework_TestCase
{
    public function testNameHasToBeAtLeast5Characters()
    {
        $this->setExpectedException(InvalidArgumentException::class, 'Name must have at least 5 characters');
        new CategoryName('la');
    }

    public function testPrints()
    {
        $name = new CategoryName('Super Bookmarks');
        $this->assertEquals('Super Bookmarks', $name);
    }

    public function testSameNameIsEqual()
    {
        $name = new CategoryName('Super Bookmarks');
        $this->assertTrue($name->equals(new CategoryName('Super Bookmarks')));
    }

    public function testDifferentNameIsNotEqual()
    {
        $name = new CategoryName('Super Bookmarks');
        $this->assertFalse($name->equals(new CategoryName('Super Book')));
    }
}

