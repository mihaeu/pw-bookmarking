<?php declare(strict_types = 1);

/**
 * @covers Category
 *
 * @uses CategoryName
 * @uses CategoryCollection
 * @uses Bookmark
 * @uses Link
 * @uses Comment
 */
class CategoryTest extends PHPUnit_Framework_TestCase
{
    public function testCanAddBookmarks()
    {
        $category = new Category(new CategoryName('Awesome'));
        $bookmark = new Bookmark(
            new Link('http://google.com/'),
            new Comment(''),
            new DateTimeImmutable()
        );
        $bookmark2 = new Bookmark(
            new Link('http://google.de/'),
            new Comment(''),
            new DateTimeImmutable()
        );
        $category->add($bookmark);
        $category->add($bookmark2);
        $this->assertEquals($bookmark, iterator_to_array($category)[0]);
        $this->assertEquals($bookmark2, iterator_to_array($category)[1]);
    }

    public function testPrints()
    {
        $category = new Category(new CategoryName('Awesome'));
        $bookmark = new Bookmark(
            new Link('http://google.com/'),
            new Comment(''),
            new DateTimeImmutable()
        );
        $bookmark2 = new Bookmark(
            new Link('http://google.de/'),
            new Comment(''),
            new DateTimeImmutable()
        );
        $category->add($bookmark);
        $category->add($bookmark2);

        $expected = '/Awesome.*google\.com.*google\.de.*/s';
        $this->assertRegExp($expected, $category->__toString());
    }

    public function testCanFilterPrivateBookmarks()
    {
        $category = new Category(new CategoryName('Awesome'));
        $bookmark = new Bookmark(
            new Link('http://google.com/'),
            new Comment(''),
            new DateTimeImmutable()
        );
        $bookmark2 = new Bookmark(
            new Link('http://google.de/'),
            new Comment(''),
            new DateTimeImmutable(),
            true
        );
        $category->add($bookmark);
        $category->add($bookmark2);

        $this->assertNotContains($bookmark2, $category->publicBookmarks());
        $this->assertContains($bookmark, $category->publicBookmarks());
    }
}

