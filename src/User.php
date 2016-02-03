<?php declare(strict_types = 1);

class User
{
    private $name;
    private $email;
    private $password;

    /**
     * User constructor.
     * @param $name
     */
    public function __construct(Name $name, Email $email, Password $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function equals(User $other) : bool
    {
        return $this->email->equals($other->email)
            && $this->password->equals($other->password)
            && $this->name->equals($other->name);
    }

    public function __toString() : string
    {
        return $this->name . ' (' . $this->email . ')';
    }
}

