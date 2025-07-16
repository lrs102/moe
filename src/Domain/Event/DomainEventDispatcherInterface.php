<?php

namespace App\Domain\Event;

interface DomainEventDispatcherInterface
{
    public function dispatchAllFor(object $entity): void;
}
