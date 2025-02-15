<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'statuses';

    public function tasks()
    {
        return $this->hasMany(Task::class, 'status_id');
    }

    public function countTasks()
    {
        return $this->tasks->count();
    }
}
