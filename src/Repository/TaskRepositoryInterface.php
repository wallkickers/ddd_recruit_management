<?php

namespace src\app\Repository;

use src\app\Domain\Task;

interface TaskRepositoryInterface {
    public function addTask(string $task_title, ?string $task_deadline, ?int $task_user_id);
    public function findBy(int $task_id);
    public function save(Task $task);
}
