<?php declare(strict_types = 1);

class Name
{
    /**
     * @var string
     */
    private $name;

    public function __construct(string $name)
    {
        $this->ensureNameIsNotEmpty($name);
        $this->name = $name;
    }

    public function equals(Name $other)
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
    private function ensureNameIsNotEmpty(string $name)
    {
        if (empty($name)) {
            throw new InvalidArgumentException('Name cannot be empty');
        }
    }
}

