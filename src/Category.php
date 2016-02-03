<?php declare(strict_types = 1);

class Category implements IteratorAggregate
{
    /**
     * @var CategoryName
     */
    private $name;

    /**
     * @var SplObjectStorage
     */
    private $bookmarks;

    public function __construct(CategoryName $name)
    {
        $this->name = $name;
        $this->bookmarks = new SplObjectStorage();
    }

    public function add(Bookmark $bookmark)
    {
        $this->bookmarks->attach($bookmark);
    }

    /**
     * @inheritdoc
     */
    public function getIterator()
    {
        return $this->bookmarks;
    }
}

