<?php

namespace src\app\Controller\Task;

use src\app\UserCase\ChangeTaskManagerUseCase;

class ChangeTaskManagerAction {
    public function __construct(ChangeTaskManagerUseCase $changeTaskManagerUseCase)
    {
        $this->changeTaskManagerUseCase = $changeTaskManagerUseCase;
    }

    protected function action($request)
    {
        $task = $this->changeTaskManagerUseCase->changeTaskManager($request->task_id, $request->user_id);
        
        return view('task.detail', $task->getTaskId());
    }
}
