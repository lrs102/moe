<?php

namespace App\Message\Event;

class UserRegistered
{
    public function __construct(
        public readonly int $userId,
        public readonly string $email
    ) {}
}
