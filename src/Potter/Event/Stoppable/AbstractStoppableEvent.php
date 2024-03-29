<?php

declare(strict_types=1);

namespace Potter\Event\Stoppable;

abstract class AbstractStoppableEvent implements StoppableEventInterface
{
    abstract public function isPropagationStopped(): bool;
    abstract protected function stopPropagation(): void;
}