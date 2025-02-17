@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card shadow p-4">
            <h1 class="text-primary mb-4">Add New Department</h1>

            <form action="{{ route('departments.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="dept_name" class="form-label">Department Name:</label>
                    <input type="text" name="dept_name" id="dept_name" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection
