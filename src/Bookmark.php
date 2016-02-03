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
     * Bookmark constructor.
     * @param Link $link
     * @param Comment $comment
     * @param DateTimeImmutable $createdAt
     */
    public function __construct(
        Link $link,
        Comment $comment,
        DateTimeImmutable $createdAt
    ) {
        $this->link = $link;
        $this->comment = $comment;
        $this->createdAt = $createdAt;
    }

    public function __toString() : string
    {
        return $this->link . PHP_EOL .
            $this->comment . PHP_EOL .
            $this->createdAt->format('Y-m-d H:i:s');
    }
}

