@extends('layouts.app')

@section('content')
    <h1>Students List</h1>
    <a href="{{ route('students.create') }}" class="btn btn-primary">Add Student</a>
    <table class="table">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Guardian</th>
                <th>Class</th>
                <th>Enrollment Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->date_of_birth }}</td>
                    <td>{{ $student->guardian ? $student->guardian->first_name . ' ' . $student->guardian->last_name : 'N/A' }}</td>
                    <td>{{ $student->studentClass ? $student->studentClass->class_name . ' - ' . $student->studentClass->section : 'N/A' }}</td>
                    <td>{{ $student->enrollment_date }}</td>
                    <td>
                        <a href="{{ route('students.show', $student->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
