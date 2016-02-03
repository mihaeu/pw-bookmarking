<?php declare(strict_types = 1);

/**
 * @covers Email
 */
class EmailTest extends PHPUnit_Framework_TestCase
{
    public function testEmailHasToBeValid()
    {
        $this->setExpectedException(InvalidArgumentException::class, 'Invalid email');
        new Email('bad');
    }

    public function testPrints()
    {
        $email = new Email('me@aol.com');
        $this->assertEquals('me@aol.com', $email->__toString());
    }

    public function testEmailsAreEqualIfAddressEqual()
    {
        $email = new Email('me@aol.com');
        $this->assertTrue($email->equals(new Email('me@aol.com')));
    }

    public function testEmailsAreNotEqualIfAddressesAreNotEqual()
    {
        $email = new Email('me@aol.com');
        $this->assertFalse($email->equals(new Email('you@aol.com')));
    }
}

