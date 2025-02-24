@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Student Class Records</h1>
    <a href="{{ route('student_classes.create') }}" class="btn btn-primary mb-3">Add New Class</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Class Name</th>
                <th>Section</th>
                <th>Teacher</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($studentClasses as $studentClass)
            <tr>
                <td>{{ $studentClass->id }}</td>
                <td>{{ $studentClass->class_name }}</td>
                <td>{{ $studentClass->section }}</td>
                <td>{{ $studentClass->teacher ? $studentClass->teacher->first_name . ' ' . $studentClass->teacher->last_name : 'N/A' }}</td>
                <td>
                    <a href="{{ route('student_classes.show', $studentClass->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('student_classes.edit', $studentClass->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('student_classes.destroy', $studentClass->id) }}" method="POST" style="display:inline-block;">
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
