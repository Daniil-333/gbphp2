<?php

namespace APP\Comment;

class Comment
{
    public function __construct(
        private int $id,
        private int $idAuthor,
        private int $idPost,
        private string $text,
    ){}

    public function __toString()
    {
        return $this->text;
    }
}