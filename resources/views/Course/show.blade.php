@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4 text-right">Course Details</h1>

        <div class="card">
            <div class="card-header bg-primary text-white text-right">
                Course Information for {{ $course->course_name }}
            </div>

            <div class="card-body">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th scope="row" style="width: 30%;">Course Name</th>
                            <td>{{ $course->course_name }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Course Code</th>
                            <td>{{ $course->course_code }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Credits</th>
                            <td>{{ $course->credits }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Description</th>
                            <td>{!! nl2br(e($course->description)) !!}</td>
                        </tr>
                        <tr>
                            <th scope="row">Teacher</th>
                            <td>{{ $course->teacher->first_name }} {{ $course->teacher->last_name }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="card-footer text-right">
                <a href="{{ route('courses.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Back to Course List
                </a>
            </div>
        </div>
    </div>
@endsection
