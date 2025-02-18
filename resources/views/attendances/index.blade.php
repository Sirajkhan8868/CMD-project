@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Attendance Records</h1>

        <a href="{{ route('attendances.create') }}" class="btn btn-primary mb-3">Add New Attendance</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Student</th>
                    <th>Class</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($attendances as $attendance)
                    <tr>
                        <td>{{ $attendance->id }}</td>
                        <td>{{ $attendance->student->first_name }} {{ $attendance->student->last_name }}</td>
                        <td>{{ $attendance->studentClass->class_name }} - {{ $attendance->studentClass->section }}</td>
                        <td>{{ $attendance->date }}</td>
                        <td>{{ $attendance->status }}</td>
                        <td>
                            <a href="{{ route('attendances.show', $attendance->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('attendances.edit', $attendance->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('attendances.destroy', $attendance->id) }}" method="POST" style="display:inline-block;">
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
