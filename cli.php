<?php

use APP\Person\Person;
use APP\Post\Post;
use APP\Comment\Comment;

require_once __DIR__ . '/vendor/autoload.php';

$faker = Faker\Factory::create();

switch ($argv[1]) {
    case 'user':
        echo new Person($faker->randomDigitNotZero(10),$faker->firstName, $faker->lastName);
        break;
    case 'post':
        echo new Post($faker->randomDigitNotZero(10), $faker->randomDigitNotZero(10), $faker->firstName, $faker->lastName);
        break;
    case 'comment':
        echo new Comment($faker->randomDigitNotZero(10), $faker->randomDigitNotZero(10), $faker->randomDigitNotZero(10), $faker->text);
        break;
}