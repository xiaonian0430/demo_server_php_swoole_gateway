<?php
declare(strict_types=1);
use Swoole\Server\PipeMessage;
use Swoole\Server\Task;
use SwooleGateway\Helper\TaskEvent as HelperTaskEvent;

class TaskEvent extends HelperTaskEvent
{

    public function onWorkerStart()
    {
    }

    public function onWorkerStop()
    {
    }

    public function onWorkerExit()
    {
    }

    public function onPipeMessage(PipeMessage $pipeMessage)
    {
    }

    public function onTask(Task $task)
    {
    }
}
