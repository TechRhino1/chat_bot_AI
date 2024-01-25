<?php

namespace App\AI;

class Chat
{
    protected array $messages = [];
    public function message()
    {
        return $this->messages;
    }
}               