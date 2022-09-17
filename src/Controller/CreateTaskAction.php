<?php

namespace src\app\Controller\Task;

use src\app\UserCase\CreateTaskUseCase;

class CreateTaskAction {
    public function __construct(CreateTaskUseCase $createTaskUseCase)
    {
        $this->createTaskUseCase = $createTaskUseCase;
    }

    protected function action()
    {
        $this->createTaskUseCase->createTask();
        return view('task.index');
    }
}
