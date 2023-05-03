<?php

namespace Geekbrains\Alisher\Blog;

class Comment
{
    private int $id;
    private User $user;
    private Post $post;
    private string $text;

    /**
     * @param int $id
     * @param User $user
     * @param Post $post
     * @param string $text
     */
    public function __construct(int $id, User $user, Post $post, string $text)
    {
        $this->id = $id;
        $this->user = $user;
        $this->post = $post;
        $this->text = $text;
    }

    public function __toString()
    {
        return 'Новый комментарий к статье ' . $this->post->getTitle() . ' от ' . $this->user . ' : ' .  $this->text;
    }

}