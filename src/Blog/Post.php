<?php

namespace Geekbrains\Alisher\Blog;

//use Geekbrains\Alisher\Person\Person;

class Post
{
    private int $post_id;
    private User $user_id;
    private string $title;
    private string $text;

    /**
     * @param int $post_id
     * @param User $user_id
     * @param string $title
     * @param string $text
     */
    public function __construct(int $post_id, User $user_id, string $title, string $text)
    {
        $this->post_id = $post_id;
        $this->user_id = $user_id;
        $this->title = $title;
        $this->text = $text;
    }

    public function __toString(): string
    {
        return $this->user_id . ' добавил(a) тему ' . $this->title . ' и написал(a): ' . $this->text;
    }

    /**
     * @return User
     */
    public function getUserId(): User
    {
        return $this->user_id;
    }
}
