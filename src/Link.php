<?php declare(strict_types = 1);

class Link
{
    /**
     * @var string
     */
    private $url;

    /**
     * Link constructor.
     * @param string $url
     */
    public function __construct($url)
    {
        $this->ensureUrlIsValid($url);

        $this->url = $url;
    }

    public function __toString() : string
    {
        return $this->url;   
    }

    private function ensureUrlIsValid(string $url)
    {
        if (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED) === false) {
            throw new InvalidArgumentException('Invalid url');
        }
    }
}

