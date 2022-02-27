<?php

use \Daniel\Gbphp\Person as Person;
use \Daniel\Gbphp\Post as Post;
use \Daniel\Gbphp\Comment as Comment;

switch ($argv[1]) {
    case 'user':
        new Person();
        break;
    case 'post':
        new Post();
        break;
    case 'comment':
        new Comment();
        break;
}