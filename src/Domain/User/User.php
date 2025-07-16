<?php

namespace App\Domain\User;

use App\Domain\Event\DomainEventInterface;
use App\Domain\Event\UserRegistered;

class User
{
    private array $domainEvents = [];

    public function __construct(
        private int $id,
        private string $email
    ) {
        $this->recordEvent(new UserRegistered($this->id, $this->email));
    }

    private function recordEvent(DomainEvent $event): void
    {
        $this->domainEvents[] = $event;
    }

    public function pullDomainEvents(): array
    {
        $events = $this->domainEvents;
        $this->domainEvents = [];

        return $events;
    }
}
