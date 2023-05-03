<?php

namespace Geekbrains\Alisher\Blog;

class Comment
{
    private int $id;
    private User $user_id;
    private Post $post_id;
    private string $text;

    /**
     * @param int $id
     * @param User $user_id
     * @param Post $post_id
     * @param string $text
     */
    public function __construct(int $id, User $user_id, Post $post_id, string $text)
    {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->post_id = $post_id;
        $this->text = $text;
    }

    public function __toString()
    {
        return 'Новый комментарий к статье #' . $this->post_id . ' от user [' . $this->user_id . '] : ' . $this->text;
    }

}