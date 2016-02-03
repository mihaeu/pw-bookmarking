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

    public function __toString() : string
    {
        $output = [];
        foreach ($this->bookmarks as $bookmark) {
            /** @var Bookmark $bookmark */
            $output[] = $bookmark->__toString();
        }
        return $this->name . PHP_EOL . implode(PHP_EOL, $output);
    }

    /**
     * @inheritdoc
     */
    public function getIterator()
    {
        return $this->bookmarks;
    }
}

