<?php

namespace src\app\UserCase;

use src\app\Dto\ChangeTaskStatusDto;
use src\app\Repository\TaskRepositoryInterface;

class ChangeTaskStatusUseCase {
    public function __construct(TaskRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function changeTaskStatus(int $task_id, string $task_status)
    {
        $task = $this->taskRepository->findBy($task_id);
        $task->changeTaskStatus($task_status);
        $this->taskRepository->save($task);

        return new ChangeTaskStatusDto($task_id);
    }
}
