<?php declare(strict_types = 1);

/**
 * @covers Password
 */
class PasswordTest extends PHPUnit_Framework_TestCase
{
    public function testMustHaveMinimum8Characters()
    {
        $this->setExpectedException(InvalidArgumentException::class, 'Minimum length of password is 8 characters');
        new Password('!');
    }

    public function testMustHaveSpecialCharacters()
    {
        $this->setExpectedException(InvalidArgumentException::class, 'Password has to contain special characters');
        new Password('aaaaaaaaaaaa');
    }

    public function testPasswordIsEqual()
    {
        $password = new Password('Gott!!!!');
        $this->assertTrue($password->equals(new Password('Gott!!!!')));
    }

    public function testPasswordIsNotEqual()
    {
        $password = new Password('Gott!!!!');
        $this->assertFalse($password->equals(new Password('1234!!!!')));
    }
}

