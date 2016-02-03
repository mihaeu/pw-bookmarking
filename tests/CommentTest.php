<?php declare(strict_types = 1);

/**
 * @covers Comment
 */
class CommentTest extends PHPUnit_Framework_TestCase
{
    public function testPrints()
    {
        $comment = new Comment('');
        $this->assertEquals('', $comment->__toString());
    }
}

