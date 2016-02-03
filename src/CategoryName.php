<?php declare(strict_types = 1);

class CategoryName
{
    const MIN_LENGTH = 5;
    /**
     * @var string
     */
    private $name;

    /**
     * CategoryName constructor.
     * @param string $name
     */
    public function __construct($name)
    {
        $this->ensureNameIsLongEnough($name);

        $this->name = $name;
    }

    public function equals(CategoryName $other) : bool
    {
        return $this->name === $other->name;
    }

    public function __toString() : string
    {
        return $this->name;
    }

    /**
     * @param $name
     */
    private function ensureNameIsLongEnough($name)
    {
        if (strlen($name) < self::MIN_LENGTH) {
            throw new InvalidArgumentException('Name must have at least 5 characters');
        }
    }
}

