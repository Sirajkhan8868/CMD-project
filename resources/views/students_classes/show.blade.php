@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Student Class Details</h1>
    <div class="card">
        <div class="card-header">
            Class: {{ $studentClass->class_name }} ({{ $studentClass->section }})
        </div>
        <div class="card-body">
            <p><strong>Class Name:</strong> {{ $studentClass->class_name }}</p>
            <p><strong>Section:</strong> {{ $studentClass->section }}</p>
            <p><strong>Assigned Teacher:</strong> {{ $studentClass->teacher ? $studentClass->teacher->first_name . ' ' . $studentClass->teacher->last_name : 'No teacher assigned' }}</p>
        </div>
    </div>
    <a href="{{ route('student_classes.index') }}" class="btn btn-secondary mt-3">Back to List</a>
</div>
@endsection
