@extends('layouts.app')

@section('title', 'Task List')

@section('content')
<div class="content-card">
    <h2>My Task List</h2>
    <p class="text-muted">View all your scheduled tasks, ordered by date.</p>
    <hr>

    @if ($tasks->isNotEmpty())
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Task Title</th>
                        <th>Status</th>
                        <th>Task Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $task->title }}</td>
                            <td>
                                @if ($task->status === 'completed')
                                    <span class="badge bg-success">Completed</span>
                                @else
                                    <span class="badge bg-warning text-dark">{{ ucfirst($task->status) }}</span>
                                @endif
                            </td>
                            <td>{{ $task->task_date->format('F d, Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="alert alert-info">No tasks found.</div>
    @endif

    <p class="text-muted mb-0">Total Tasks: {{ $tasks->count() }}</p>
</div>
@endsection
