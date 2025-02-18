@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Enrollment Records</h1>
    <a href="{{ route('enrollments.create') }}" class="btn btn-primary mb-3">Enroll New Student</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student</th>
                <th>Course</th>
                <th>Enrollment Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($enrollments as $enrollment)
            <tr>
                <td>{{ $enrollment->id }}</td>
                <td>{{ $enrollment->student->first_name }} {{ $enrollment->student->last_name }}</td>
                <td>{{ $enrollment->course->course_name }}</td>
                <td>{{ $enrollment->enrollment_date }}</td>
                <td>
                    <a href="{{ route('enrollments.show', $enrollment->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('enrollments.edit', $enrollment->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('enrollments.destroy', $enrollment->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
