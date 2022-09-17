<?php

namespace src\app\Dto;

class ChangeTaskManagerDto {
    private int $task_id;

    public function __construct(int $task_id){}

    public function getTaskId()
    {
        return $this->task_id;
    }
}