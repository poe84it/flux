<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class TaskCheck extends Pivot
{
    protected $table = 'task_check';

    protected $fillable = ['task_id', 'check_id', 'assigned_by_user_id', 'status', 'comments'];
}
