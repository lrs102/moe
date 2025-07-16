<?php

namespace App\Infrastructure\Messenger;

use App\Domain\Event\DomainEventInterface as DomainEvent;
use App\Domain\Event\DomainEventDispatcherInterface as DomainEventDispatcher;
use Symfony\Component\Messenger\MessageBusInterface;

class MessengerDomainEventDispatcher implements DomainEventDispatcher
{
    public function __construct(private MessageBusInterface $bus) {}

    public function dispatchAllFor(object $entity): void
    {
        if (!method_exists($entity, 'pullDomainEvents')) {
            return;
        }

        foreach ($entity->pullDomainEvents() as $event) {
            if ($event instanceof DomainEvent) {
                $this->bus->dispatch($event);
            }
        }
    }
}
