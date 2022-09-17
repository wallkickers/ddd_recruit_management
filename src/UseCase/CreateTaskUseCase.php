<?php

namespace src\app\UserCase;

use src\app\Repository\TaskRepositoryInterface;

class CreateTaskUseCase {
    public function __construct(TaskRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function createTask(string $task_title, ?string $task_deadline, ?int $task_user_id)
    {
        $this->taskRepository->addTask($task_title, $task_deadline, $task_user_id);
    }
}