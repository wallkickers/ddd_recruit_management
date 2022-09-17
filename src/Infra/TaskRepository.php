<?php

namespace src\app\infra;

use PDO; // Eloquent
use src\app\Domain\Task;
use src\app\Repository\TaskRepositoryInterface;
use TaskModel; // extends Illuminate\Database\Eloquent\Model;

class TaskRepository implements TaskRepositoryInterface {
    public function addTask(string $task_title, ?string $task_deadline, ?int $task_user_id)
    {
        TaskModel::insert([
            'task_title' => $task_title,
            'task_deadline' => $task_deadline,
            'task_user_id' => $task_user_id,
        ]);
    }

    public function findBy(int $task_id)
    {
        $task_model = TaskModel::select('*')
            ->where('task_id', $task_id)
            ->get();

        return new Task(
            $task_model->task_id,
            $task_model->task_title,
            $task_model->task_deadline,
            $task_model->task_user_id
        );
    }

    public function save(Task $task)
    {
        $task_model = TaskModel::save($task);
    }
}
