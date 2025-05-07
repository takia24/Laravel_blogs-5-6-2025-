@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>{{ $blog->title }}</h4>
        </div>
        <div class="card-body">
            <p>{{ $blog->description }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
@endsection
