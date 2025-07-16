<?php

namespace App\MessageHandler;

use App\Domain\Event\UserRegistered;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class UserRegisteredHandler
{
    public function __invoke(UserRegistered $event): void
    {
        // Send welcome email, trigger webhook, log audit trail, whatever
        echo "New user: {$event->email} (ID: {$event->userId})\n";
    }
}
