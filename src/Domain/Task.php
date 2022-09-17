<?php

namespace src\app\Domain;

class Task {
    private int $task_id;
    private string $task_title;
    private string $task_status;
    private string $task_deadline;
    private int $task_user_id;

    public function __construct(
        int $task_id,
        string $task_title,
        ?string $task_deadline,
        ?int $task_user_id
    ) {
        $this->task_id = $task_id;
        $this->task_title = $task_title;
        $this->task_status = '未対応';
        $this->task_title = $task_deadline;
        $this->task_title = $task_user_id;
    }

    public function changeTaskStatus(string $task_status)
    {
        $this->task_status = $task_status;
    }

    public function changeTaskManager(string $user_id)
    {
        $this->task_user_id = $user_id;
    }
}