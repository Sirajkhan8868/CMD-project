@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4 text-start">Teacher Details</h1>

            <div class="card-header bg-primary text-white text-start">
                Teacher: {{ $teacher->first_name }} {{ $teacher->last_name }}
            </div>
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th scope="row" style="width: 30%;">Email</th>
                            <td>{{ $teacher->email }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Contact</th>
                            <td>{{ $teacher->contact }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Address</th>
                            <td>{{ $teacher->address }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Department</th>
                            <td>{{ $teacher->department->name ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Hire Date</th>
                            <td>{{ $teacher->hire_date }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Enrollment Date</th>
                            <td>{{ $teacher->enrollment_date }}</td>
                        </tr>
                    </tbody>
                </table>
            <div class="card-footer text-start">
                <a href="{{ route('teachers.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Back to List
                </a>
                {{-- <a href="{{ route('teachers.edit', $teacher) }}" class="btn btn-warning">
                    <i class="bi bi-pencil"></i> Edit
                </a> --}}

                <form action="{{ route('teachers.destroy', $teacher) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="bi bi-trash"></i> Delete
                    </button>
                </form>
            </div>
    </div>
@endsection
