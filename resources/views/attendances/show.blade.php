@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Attendance Details</h1>

        <div class="card">
            <div class="card-header">
                Attendance Record for {{ $attendance->student->first_name }} {{ $attendance->student->last_name }}
            </div>
            <div class="card-body">
                <h5 class="card-title">Student: {{ $attendance->student->first_name }} {{ $attendance->student->last_name }}</h5>
                <p><strong>Class:</strong> {{ $attendance->studentClass->class_name }} - {{ $attendance->studentClass->section }}</p>
                <p><strong>Date:</strong> {{ $attendance->date }}</p>
                <p><strong>Status:</strong> {{ $attendance->status }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('attendances.index') }}" class="btn btn-secondary">Back to Attendance List</a>
            </div>
        </div>
    </div>
@endsection
