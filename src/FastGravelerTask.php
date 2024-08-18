<?php

use Aternos\Taskmaster\Task\OnBoth;
use Aternos\Taskmaster\Task\OnChild;
use Aternos\Taskmaster\Task\Task;
use Random\RandomException;

class FastGravelerTask extends Task
{
    #[OnBoth]
    protected int $maxOnes = 0;

    public function __construct(
        protected int $iterations = 1_000,
    )
    {
    }

    /**
     * @throws RandomException
     */
    #[OnChild] public function run()
    {
        for ($j = 0; $j < $this->iterations; $j++) {
            $ones = 0;
            for ($i = 0; $i < 231; $i++) {
                if (mt_rand(1, 4) === 1) {
                    $ones++;
                }
            }
            if ($ones > $this->maxOnes) {
                $this->maxOnes = $ones;
            }
        }
    }

    public function getOnes(): int
    {
        return $this->maxOnes;
    }
}