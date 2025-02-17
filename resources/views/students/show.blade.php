@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Student Details</h1>
        <div class="card">
            <div class="card-header">
                <h4>{{ $student->first_name }} {{ $student->last_name }}</h4>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item"><strong>First Name:</strong> {{ $student->first_name }}</li>
                    <li class="list-group-item"><strong>Last Name:</strong> {{ $student->last_name }}</li>
                    <li class="list-group-item"><strong>Date of Birth:</strong> {{ $student->date_of_birth }}</li>
                    <li class="list-group-item"><strong>Gender:</strong> {{ $student->gender }}</li>
                    <li class="list-group-item"><strong>Address:</strong> {{ $student->address }}</li>
                    <li class="list-group-item"><strong>Contact:</strong> {{ $student->contact }}</li>
                    <li class="list-group-item"><strong>Guardian:</strong> {{ $student->guardian->first_name }} {{ $student->guardian->last_name }}</li>
                    <li class="list-group-item"><strong>Class:</strong> {{ $student->studentClass->class_name }} - {{ $student->studentClass->section }}</li>
                </ul>
            </div>
            <div class="card-footer text-right">
                <a href="{{ route('students.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
@endsection
