<?php

namespace Geekbrains\Alisher\Blog;

//use Geekbrains\Alisher\Person\Person;

class Post
{
    private int $id;
    private User $user;
    private string $title;
    private string $text;

    /**
     * @param int $id
     * @param User $user
     * @param string $title
     * @param string $text
     */
    public function __construct(int $id, User $user, string $title, string $text)
    {
        $this->id = $id;
        $this->user = $user;
        $this->title = $title;
        $this->text = $text;
    }

    public function __toString(): string
    {
        return $this->user . ' добавил(a) тему ' . $this->title . ' и написал(a): ' . $this->text;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }


}
