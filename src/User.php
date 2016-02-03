<?php declare(strict_types = 1);

class User
{
    /**
     * @var Name
     */
    private $name;

    /**
     * @var Email
     */
    private $email;

    /**
     * @var Password
     */
    private $password;

    /**
     * @var CategoryCollection
     */
    private $categories;

    public function __construct(Name $name, Email $email, Password $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->categories = new CategoryCollection();
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

    public function add(Category $category)
    {
        $this->categories->add($category);
    }

    public function categories() : CategoryCollection
    {

    }
}

