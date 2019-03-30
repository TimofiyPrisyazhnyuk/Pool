<?php

/**
 * Class StringReverseWorker
 */
class StringReverseWorker
{
    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * StringReverseWorker constructor.
     * @throws Exception
     */
    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    /**
     * @param string $text
     * @return string
     */
    public function run(string $text)
    {
        return strrev($text);
    }
}
