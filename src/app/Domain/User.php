<?php

namespace src\app\Domain;

class User {
    private int $user_id;
    private string $user_name;

    public function __construct(
        int $user_id,
        string $user_name
    ) {
        $this->user_id = $user_id;
        $this->user_name = $user_name;
    }
}