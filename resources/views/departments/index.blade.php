@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Departments</h1>
        <a href="{{ route('departments.create') }}" class="btn btn-primary mb-3">Add New Department</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Department Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departments as $department)
                    <tr>
                        <td>{{ $department->id }}</td>
                        <td>{{ $department->dept_name }}</td>
                        <td>
                            <a href="{{ route('departments.show', $department->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('departments.destroy', $department->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
