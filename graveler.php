<?php

use Aternos\Taskmaster\Taskmaster;

require __DIR__ . '/vendor/autoload.php';

$taskmaster = new Taskmaster();
$taskmaster->autoDetectWorkers(20);
$taskmaster->addTaskFactory(new FastGravelerTaskFactory());

$maxOnes = 0;
foreach ($taskmaster->waitAndHandleTasks() as $task) {
    /** @var GravelerTask $task */
    if ($task->getOnes() > $maxOnes) {
        $maxOnes = $task->getOnes();
    }
}

echo "Max ones: $maxOnes\n";

$taskmaster->stop();