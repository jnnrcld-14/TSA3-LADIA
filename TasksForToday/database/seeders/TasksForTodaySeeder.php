<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class TasksForTodaySeeder extends Seeder
{
    public function run(): void
    {
        // Keep the database at exactly one sample user and eight sample tasks.
        Task::query()->delete();
        User::query()->delete();

        User::create([
            'username' => 'janna123',
            'full_name' => 'Your Full Name',
            'email' => 'janna@example.com',
        ]);

        $today = today();

        $tasks = [
            ['title' => 'Complete Laravel Assignment', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Review Database Migrations', 'status' => 'completed', 'task_date' => $today],
            ['title' => 'Study Eloquent Models', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Read Chapter 3', 'status' => 'pending', 'task_date' => $today->copy()->subDay()],
            ['title' => 'Prepare Project Documentation', 'status' => 'completed', 'task_date' => $today->copy()->subDay()],
            ['title' => 'Organize School Requirements', 'status' => 'pending', 'task_date' => $today->copy()->subDay()],
            ['title' => 'Practice Laravel Routing', 'status' => 'pending', 'task_date' => $today->copy()->addDay()],
            ['title' => 'Finalize Project Submission', 'status' => 'pending', 'task_date' => $today->copy()->addDay()],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
