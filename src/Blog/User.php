<?php

namespace Geekbrains\Alisher\Blog;

class User
{
    private int $user_id;
    private string $firstName;
    private string $lastName;

    public function __construct(int $user_id, string $firstName, string $lastName)
    {
        $this->user_id = $user_id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function __toString(): string
    {
        return 'Пользователь [' . $this->user_id . '] ' . $this->firstName . ' ' . $this->lastName;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }
}
