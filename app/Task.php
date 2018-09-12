<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Task extends Model
{
    protected $fillable = ['id', 'user_id', 'title', 'description'];
    protected $casts = ['id' => 'string', ];

    public function saveTask($data)
    {
        $task = new Task();
        $task->id = Uuid::uuid1();
        $task->user_id = auth()->user()->id;
        $task->title = $data['title'];
        $task->description = $data['description'];
        $task->save();
        return 1;
    }

    public function updateTask($data)
    {
        $task = $this->find($data['id']);
        $task->user_id = auth()->user()->id;
        $task->title = $data['title'];
        $task->description = $data['description'];
        $task->save();
        return 1;
    }
}