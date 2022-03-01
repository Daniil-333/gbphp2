<?php
namespace APP\Person;

class Person
{
    public function __construct(
        private int $id,
        private string $firstName,
        private string $lastName,
    ){}

    public function __toString()
    {
        return $this->id. $this->firstName . ' ' . $this->lastName;
    }
}