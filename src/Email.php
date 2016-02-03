<?php declare(strict_types = 1);

class Email
{
    /**
     * @var string
     */
    private $address;

    public function __construct(string $address)
    {
        $this->ensureAddressIsValid($address);

        $this->address = $address;
    }

    public function equals(Email $other)
    {
        return $this->address === $other->address;
    }

    public function __toString() : string
    {
        return $this->address;
    }

    /**
     * @TODO not 100% RFC compliant
     *
     * @param string $address
     */
    private function ensureAddressIsValid(string $address)
    {
        if (filter_var($address, FILTER_VALIDATE_EMAIL) === false) {
            throw new InvalidArgumentException('Invalid email');
        }
    }
}

