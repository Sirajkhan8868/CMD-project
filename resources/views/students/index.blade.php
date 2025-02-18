@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4 text-center">Students List</h1>

        <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add Student</a>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>DOB</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Guardian</th>
                        <th>Class</th>
                        <th>Enrollment</th>
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
                            <td>{{ $student->address }}</td>
                            <td>{{ $student->contact }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->guardian ? $student->guardian->first_name . ' ' . $student->guardian->last_name : 'N/A' }}</td>
                            <td>{{ $student->studentClass ? $student->studentClass->class_name . ' - ' . $student->studentClass->section : 'N/A' }}</td>
                            <td>{{ $student->enrollment_date }}</td>
                            <td>
                                <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
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
    </div>
@endsection
