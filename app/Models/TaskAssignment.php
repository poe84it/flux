<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskAssignment extends Model
{
    use HasFactory;

    protected $fillable = ['task_id', 'operator_id', 'assigned_at'];

    public $timestamps = false;

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function operator()
    {
        return $this->belongsTo(User::class);
    }
}
