@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="text-primary mb-4">Edit Department</h1>

        <form action="{{ route('departments.update', $department->id) }}" method="POST" class="card shadow p-4">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="dept_name" class="form-label">Department Name:</label>
                <input type="text" name="dept_name" id="dept_name" class="form-control" value="{{ $department->dept_name }}" required>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('departments.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
