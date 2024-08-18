<?php

use Aternos\Taskmaster\Task\OnBoth;
use Aternos\Taskmaster\Task\OnChild;
use Aternos\Taskmaster\Task\Task;
use Random\RandomException;

class GravelerTask extends Task
{
    #[OnBoth]
    protected int $ones = 0;

    /**
     * @throws RandomException
     */
    #[OnChild] public function run()
    {
        for ($i = 0; $i < 231; $i++) {
            if (random_int(1, 4) === 1) {
                $this->ones++;
            }
        }
    }

    public function getOnes(): int
    {
        return $this->ones;
    }
}