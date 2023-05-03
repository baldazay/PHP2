<?php

use Geekbrains\Alisher\Blog\{User, Post, Comment};
//use Geekbrains\Alisher\Person\{Person, Name};

include __DIR__ . '/vendor/autoload.php';

$faker = Faker\Factory::create('ru_RU');

$user = new User(1, $faker->firstName, $faker->lastName);

switch ($argv) {
    case $argv[1] == 'user':
        echo $user;
        break;
    case $argv[1] == 'post':
        $post = new Post(1, $user, 'Laravel', $faker->text);
        echo $post;
        break;
    case $argv[1] == 'comment':
        $post = new Post(1, $user, 'Laravel', $faker->text);
        $comment = new Comment(
            1,
            $user,
            $post,
            $faker->text);
        echo $comment;
        break;
}

$post = new Post(1, $user, 'Laravel', $faker->text);
//echo $post;

$comment = new Comment(1, $user, $post, $faker->text);
//echo $comment;
