<?php declare(strict_types = 1);

class Password
{
    /**
     * @var string
     */
    private $password;

    public function __construct(string $password)
    {
        $this->ensurePasswordIsLongEnough($password);
        $this->ensurePasswordHasSpecialCharacters($password);

        $this->password = $password;
    }

    public function equals(Password $other) : bool
    {
        return $this->password === $other->password;
    }

    /**
     * @param string $password
     */
    private function ensurePasswordIsLongEnough(string $password)
    {
        if (strlen($password) < 8) {
            throw new InvalidArgumentException('Minimum length of password is 8 characters');
        }
    }

    /**
     * @param string $password
     */
    private function ensurePasswordHasSpecialCharacters(string $password)
    {
        if (preg_match('/[^a-zA-Z0-9]/', $password) !== 1) {
            throw new InvalidArgumentException('Password has to contain special characters');
        }
    }
}

