<?php


namespace ru\fadus;


use Cassandra\Date;

class Person
{
    private string $name;
    private int $birthday;

    /**
     * Person constructor.
     * @param string $name
     * @param int $birthday
     */
    public function __construct(string $name, int $birthday)
    {
        $this->name = $name;
        $this->birthday = $birthday;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getBirthday(): int
    {
        return $this->birthday;
    }


}