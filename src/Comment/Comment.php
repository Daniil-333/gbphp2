<?php

namespace Daniel\Gbphp\Comment;

use Daniel\Gbphp\Person as User;
use Daniel\Gbphp\Post as Post;

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
        return $this->heading . '<br>' . $this->text;
    }
}