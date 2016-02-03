<?php declare(strict_types = 1);

/**
 * @covers Bookmark
 *
 * @uses Link
 * @uses Comment
 */
class BookmarkTest extends PHPUnit_Framework_TestCase
{
    public function test()
    {
        $now = new DateTimeImmutable();
        $bookmark = new Bookmark(
            new Link('http://google.com/'),
            new Comment(''),
            $now
        );
        $this->assertEquals(
            'http://google.com/' . PHP_EOL . PHP_EOL .$now->format('Y-m-d H:i:s'),
            $bookmark->__toString()
        );
    }
}

