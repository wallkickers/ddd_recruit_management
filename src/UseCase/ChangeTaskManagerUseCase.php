<?php

namespace src\app\UserCase;

use src\app\Dto\ChangeTaskManagerDto;
use src\app\Repository\TaskRepositoryInterface;

class ChangeTaskManagerUseCase {
    public function __construct(TaskRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function changeTaskManager(int $task_id, string $user_id)
    {
        $task = $this->taskRepository->findBy($task_id);
        $task->changeTaskManager($user_id);
        $this->taskRepository->save($task);

        return new ChangeTaskManagerDto($task_id);
    }
}
