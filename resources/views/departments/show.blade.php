@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card shadow p-4">
            <h1 class="text-primary mb-4">Department Details</h1>
            <p><strong>ID:</strong> {{ $department->id }}</p>
            <p><strong>Name:</strong> {{ $department->dept_name }}</p>

            <div class="mt-4">
                <a href="{{ route('departments.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
@endsection
