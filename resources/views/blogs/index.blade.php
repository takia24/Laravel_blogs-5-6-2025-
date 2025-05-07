@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Blog Posts</h1>
    <a href="{{ route('blogs.create') }}" class="btn btn-primary mb-3">Create New</a>

    @if($blogs->isEmpty())
        <p>No blogs found.</p>
    @else
        <div class="list-group">
            @foreach($blogs as $blog)
                <div class="list-group-item">
                    <div class="d-flex justify-content-between">
                        <strong>{{ $blog->title }}</strong>
                        <div>
                            <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-sm btn-info">View</a>
                            <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
