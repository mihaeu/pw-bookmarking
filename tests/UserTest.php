<?php declare(strict_types = 1);

/**
 * @covers User
 *
 * @uses Name
 * @uses Email
 * @uses Password
 * @uses CategoryCollection
 */
class UserTest extends PHPUnit_Framework_TestCase
{
    public function testIsEqualToUserWithSameNameAndEmail()
    {
        $user1 = new User(new Name('bla'), new Email('me@aol.com'), new Password('12345<?>!'));
        $user2 = new User(new Name('bla'), new Email('me@aol.com'), new Password('12345<?>!'));
        $this->assertTrue($user1->equals($user2));
    }

    public function testIsNotEqualToUserDifferentName()
    {
        $user1 = new User(new Name('bla'), new Email('me@aol.com'), new Password('12345<?>!'));
        $user2 = new User(new Name('blub'), new Email('me@aol.com'), new Password('12345<?>!'));
        $this->assertFalse($user1->equals($user2));
    }

    public function testIsNotEqualToUserDifferentEmail()
    {
        $user1 = new User(new Name('bla'), new Email('me@aol.com'), new Password('12345<?>!'));
        $user2 = new User(new Name('bla'), new Email('you@aol.com'), new Password('12345<?>!'));
        $this->assertFalse($user1->equals($user2));
    }

    public function testPrints()
    {
        $user1 = new User(new Name('bla'), new Email('me@aol.com'), new Password('12345<?>!'));
        $this->assertEquals('bla (me@aol.com)', $user1->__toString());
    }

    public function testHasCategories()
    {
        $user1 = new User(new Name('bla'), new Email('me@aol.com'), new Password('12345<?>!'));
        $mockCategory = $this->getMockBuilder(Category::class)
            ->disableOriginalConstructor()
            ->getMock();
        $user1->add($mockCategory);
        $this->assertEquals($mockCategory, iterator_to_array($user1->categories())[0]);
    }
}

