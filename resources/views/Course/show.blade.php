@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Course Details</h1>

        <div class="card">
            <div class="card-header">
                Course Information for {{ $course->course_name }}
            </div>
            <div class="card-body">
                <h5 class="card-title">Course Name: {{ $course->course_name }}</h5>
                <p><strong>Course Code:</strong> {{ $course->course_code }}</p>
                <p><strong>Credits:</strong> {{ $course->credits }}</p>
                <p><strong>Teacher:</strong> {{ $course->teacher->first_name }} {{ $course->teacher->last_name }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back to Course List</a>
            </div>
        </div>
    </div>
@endsection
