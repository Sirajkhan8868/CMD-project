@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4 text-start">Enrollment Details</h1>

            <div class="card-header bg-primary text-white text-start">
                Enrollment for {{ $enrollment->student->first_name }} {{ $enrollment->student->last_name }}
            </div>
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th scope="row" style="width: 30%;">Course</th>
                            <td>{{ $enrollment->course->course_name }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Enrollment Date</th>
                            <td>{{ $enrollment->enrollment_date }}</td>
                        </tr>
                    </tbody>
                </table>
            <div class="card-footer text-start">
                <a href="{{ route('enrollments.index') }}" class="btn btn-secondary ">Back to List</a>
            </div>
    </div>
@endsection
