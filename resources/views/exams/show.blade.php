@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Exam Details</h1>
    <div class="card">
        <div class="card-header">
            Exam for {{ $exam->course->course_name }}
        </div>
        <div class="card-body">
            <p><strong>Course:</strong> {{ $exam->course->course_name }}</p>
            <p><strong>Exam Date:</strong> {{ $exam->exam_date }}</p>
        </div>
    </div>
    <a href="{{ route('exams.index') }}" class="btn btn-secondary mt-3">Back to List</a>
</div>
@endsection
