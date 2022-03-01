<?php

namespace APP\Post;

class Post
{
    public function __construct(
        private int $id,
        private int $person,
        private string $heading,
        private string $text
    ){}

    public function __toString()
    {
        return $this->heading . '<br>' . $this->text;
    }
}