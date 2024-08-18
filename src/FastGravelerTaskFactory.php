<?php

use Aternos\Taskmaster\Task\TaskFactory;
use Aternos\Taskmaster\Task\TaskInterface;

class FastGravelerTaskFactory extends TaskFactory
{
    protected int $count = 0;

    public function __construct(
        protected int $iterations = 1_000_000_000,
        protected int $stepSize = 1_000,
    )
    {
    }

    public function createNextTask(?string $group): ?TaskInterface
    {
        if (($this->count += $this->stepSize) < $this->iterations) {
            if ($this->count % 100_000_000 === 0) {
                echo "Iteration: " . $this->count . "\n";
            }
            return new FastGravelerTask($this->stepSize);
        }

        return null;
    }
}