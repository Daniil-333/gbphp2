<?php
namespace Daniel\Gbphp\Person;

class Person
{
    public function __construct(
        private int $id,
        private string $firstName,
        private string $lastName,
    ){}

    public function __toString()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}