<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->foreignId('super_task_id')->nullable();
            $table->timestamps();
        });

        Schema::create('task_assignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('task_id');
            $table->foreignId('user_id')->nullable()->index();
            $table->timestamp('assigned_at');
        });

        Schema::create('task_check', function (Blueprint $table) {
            $table->id();
            $table->foreignId('task_id');
            $table->foreignId('check_id');
            $table->foreignId('assigned_by_user_id');
            $table->enum('status', ['pass', 'correct'])->nullable();
            $table->text('comments')->nullable();
            $table->timestamps();
        });

        Schema::create('checks', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
        Schema::dropIfExists('task_assignments');
        Schema::dropIfExists('task_check');
        Schema::dropIfExists('checks');
    }
};
