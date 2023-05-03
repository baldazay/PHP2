<?php

use Geekbrains\Alisher\Blog\{User, Post, Comment};
//use Geekbrains\Alisher\Person\{Person, Name};

include __DIR__ . '/vendor/autoload.php';

$faker = Faker\Factory::create('ru_RU');

/*$name = new Name('Alisher', 'Yuldashev');
$person = new Person(
    $name,
    new DateTimeImmutable());*/

$argv = [
    'user' => $user = new User(1, $faker->firstName, $faker->lastName),
    'post' => $post = new Post(1, $user, 'Laravel', $faker->text),
    'comment' => $comment = new Comment(1, $user, $post, $faker->text)
];

switch ($argv) {
    case $argv[1]:
        echo $argv[1],
}

$user = new User(1, $faker->firstName, $faker->lastName);

$post = new Post(1, $user, 'Laravel', $faker->text);
//echo $post;

$comment = new Comment(1, $user, $post, $faker->text);
echo $comment;