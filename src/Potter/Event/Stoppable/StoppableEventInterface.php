<?php

declare(strict_types=1);

namespace Potter\Event\Stoppable;

use \Psr\EventDispatcher\StoppableEventInterface as PsrStoppableEventInterface;

interface StoppableEventInterface extends PsrStoppableEventInterface
{
    public function isPropagationStopped(): bool;
}