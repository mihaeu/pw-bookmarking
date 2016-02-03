<?php declare(strict_types = 1);

class Bookmark
{
    /**
     * @var Link
     */
    private $link;

    /**
     * @var Comment
     */
    private $comment;

    /**
     * @var DateTimeImmutable
     */
    private $createdAt;

    /**
     * @var bool
     */
    private $private;

    public function __construct(
        Link $link,
        Comment $comment,
        DateTimeImmutable $createdAt,
        bool $private = false
    ) {
        $this->link = $link;
        $this->comment = $comment;
        $this->createdAt = $createdAt;
        $this->private = $private;
    }

    public function createdAt() : DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function __toString() : string
    {
        return $this->link . PHP_EOL .
            $this->comment . PHP_EOL .
            $this->createdAt->format('Y-m-d H:i:s');
    }

    public function isPublic()
    {
        return !$this->private;
    }
}

