<?php

namespace APP\Entity;

use APP\Person\Person;
use APP\Post\Post;
use APP\Comment\Comment;
use Faker;

class EntityFactory
{
    protected ?\Generator $faker = null;
    public function __construct(Factory $faker = null) {
        $this->faker = $faker ?? Faker\Factory::create();
    }

    public function create(string $type) {
        return match($type) {
            'user' => new Person($this->faker->randomDigitNotZero(10),$this->faker->firstName, $this->faker->lastName),
            'post' => new Post($this->faker->randomDigitNotZero(10), $this->faker->randomDigitNotZero(10), $this->faker->firstName, $this->faker->lastName),
            'comment' => new Comment($this->faker->randomDigitNotZero(10), $this->faker->randomDigitNotZero(10), $this->faker->randomDigitNotZero(10), $this->faker->text),
        };
    }
}