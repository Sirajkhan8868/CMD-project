@extends('layouts.app')

@section('content')
<h1>Teachers List</h1>
<a href="{{ route('teachers.create') }}" class="btn btn-primary mb-3">Add New Teacher</a>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Department</th>
            <th>Hire Date</th>
            <th>Enrollment Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($teachers as $teacher)
            <tr>
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->first_name }}</td>
                <td>{{ $teacher->last_name }}</td>
                <td>{{ $teacher->email }}</td>
                <td>{{ $teacher->contact }}</td>
                <td>{{ $teacher->department->name ?? 'N/A' }}</td>
                <td>{{ $teacher->hire_date }}</td>
                <td>{{ $teacher->enrollment_date }}</td>
                <td>
                    <a href="{{ route('teachers.show', $teacher) }}" class="btn btn-info">View</a>
                    <a href="{{ route('teachers.edit', $teacher) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('teachers.destroy', $teacher) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger ">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="9">No teachers found.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
