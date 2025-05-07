@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>{{ $task->title }}</h4>
        </div>
        <div class="card-body">
            <p>{{ $task->description }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
@endsection
