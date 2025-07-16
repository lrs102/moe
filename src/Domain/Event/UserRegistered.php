<?php

namespace App\Domain\Event;

readonly class UserRegistered implements DomainEventInterface
{
    public function __construct(
        public int    $userId,
        public string $email
    ) {}
}
