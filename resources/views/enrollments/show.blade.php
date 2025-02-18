@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Enrollment Details</h1>
    <div class="card">
        <div class="card-header">
            Enrollment for {{ $enrollment->student->first_name }} {{ $enrollment->student->last_name }}
        </div>
        <div class="card-body">
            <p><strong>Course:</strong> {{ $enrollment->course->course_name }}</p>
            <p><strong>Enrollment Date:</strong> {{ $enrollment->enrollment_date }}</p>
        </div>
    </div>
    <a href="{{ route('enrollments.index') }}" class="btn btn-secondary mt-3">Back to List</a>
</div>
@endsection
