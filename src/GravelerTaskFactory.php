<?php

use Aternos\Taskmaster\Task\TaskFactory;
use Aternos\Taskmaster\Task\TaskInterface;

class GravelerTaskFactory extends TaskFactory
{
    protected int $count = 0;

    public function __construct(
        protected int $iterations = 1_000_000_000,
    )
    {
    }

    public function createNextTask(?string $group): ?TaskInterface
    {
        if ($this->count++ < $this->iterations) {
            return new GravelerTask();
        }

        // Stop creating tasks after 100 tasks
        return null;
    }
}