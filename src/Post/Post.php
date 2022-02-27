<?php

namespace Daniel\Gbphp\Post;

use Daniel\Gbphp\Person;

class Post
{
    public function __construct(
        private int $id,
        private Person $person,
        private string $heading,
        private string $text
    ){}

    public function __toString()
    {
        return $this->heading . '<br>' . $this->text;
    }
}