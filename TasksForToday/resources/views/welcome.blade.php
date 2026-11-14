@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<div class="content-card">
    <h2>Welcome to Tasks for Today!</h2>
    <p class="text-muted">Here are your scheduled tasks for today.</p>
    <hr>
    <h5>Today's Date: {{ today()->format('F d, Y') }}</h5>

    @forelse ($tasks as $task)
        <div class="list-group-item d-flex justify-content-between align-items-center border rounded p-3 mt-2">
            <div>
                <strong>{{ $task->title }}</strong>
                <br>
                <small class="text-muted">{{ $task->task_date->format('F d, Y') }}</small>
            </div>
            @if ($task->status === 'completed')
                <span class="badge bg-success">Completed</span>
            @else
                <span class="badge bg-warning text-dark">Pending</span>
            @endif
        </div>
    @empty
        <div class="alert alert-info mt-3 mb-0">You have no tasks scheduled for today.</div>
    @endforelse

    <a href="{{ route('tasks') }}" class="btn btn-dark mt-4">View All Tasks</a>
</div>
@endsection
