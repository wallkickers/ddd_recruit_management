<?php

namespace src\app\Controller\Task;

use src\app\UserCase\ChangeTaskStatusUseCase;

class ChangeTaskStatusAction {
    public function __construct(ChangeTaskStatusUseCase $changeTaskStatusUseCase)
    {
        $this->changeTaskStatusUseCase = $changeTaskStatusUseCase;
    }

    protected function action($request)
    {
        $task = $this->changeTaskStatusUseCase->changeTaskStatus($request->task_id, $request->task_status);
        
        return view('task.detail', $task->getTaskId());
    }
}
