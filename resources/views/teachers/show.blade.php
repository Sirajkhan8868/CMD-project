@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Teacher Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $teacher->first_name }} {{ $teacher->last_name }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ $teacher->email }}</p>
            <p class="card-text"><strong>Contact:</strong> {{ $teacher->contact }}</p>
            <p class="card-text"><strong>Address:</strong> {{ $teacher->address }}</p>
            <p class="card-text"><strong>Department:</strong> {{ $teacher->department->name ?? 'N/A' }}</p>
            <p class="card-text"><strong>Hire Date:</strong> {{ $teacher->hire_date }}</p>
            <p class="card-text"><strong>Enrollment Date:</strong> {{ $teacher->enrollment_date }}</p>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Back to List</a>
        <a href="{{ route('teachers.edit', $teacher) }}" class="btn btn-warning">Edit</a>

        <form action="{{ route('teachers.destroy', $teacher) }}" method="POST" style="display:inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>
@endsection
