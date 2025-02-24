@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4 text-center">Courses</h1>

        <a href="{{ route('courses.create') }}" class="btn btn-primary mb-3">Add New Course</a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Course Name</th>
                    <th>Course Code</th>
                    <th>Description</th>
                    <th>Teacher</th>
                    <th>Credits</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->course_name }}</td>
                        <td>{{ $course->course_code }}</td>
                        <td>{{ $course->description ?? 'No description available' }}</td>
                        <td>{{ $course->teacher->first_name ?? 'N/A' }} {{ $course->teacher->last_name ?? '' }}</td>
                        <td>{{ $course->credits }}</td>
                        <td>
                            <a href="{{ route('courses.show', $course->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline-block;">
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
