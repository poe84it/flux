<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    use HasFactory;

    protected $fillable = ['description'];

    public function tasks()
    {
        return $this->belongsToMany(Task::class, 'task_check')
            ->withPivot('status', 'comments', 'assigned_by_user_id');
    }
}
