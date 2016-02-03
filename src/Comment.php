<?php declare(strict_types = 1);

class Comment
{
    /**
     * @var string
     */
    private $comment;

    /**
     * Comment constructor.
     * @param string $comment
     */
    public function __construct($comment)
    {
        $this->comment = $comment;
    }

    public function __toString() : string
    {
        return $this->comment;
    }
}

