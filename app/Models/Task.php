<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'super_task_id'];

    public function superTask()
    {
        return $this->belongsTo(Task::class, 'super_task_id');
    }

    public function subTasks()
    {
        return $this->hasMany(Task::class, 'super_task_id');
    }

    public function checks()
    {
        return $this->belongsToMany(Check::class, 'task_check')
            ->withPivot('status', 'comments', 'assigned_by_user_id');
    }

    public function assignments()
    {
        return $this->hasMany(TaskAssignment::class);
    }

    public function currentOperator()
    {
        return $this->assignments()->latest('assigned_at')->first();
    }
}
