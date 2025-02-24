@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4 text-start">Student Class Details</h1>

            <div class="card-header bg-primary text-white text-start">
                Class: {{ $studentClass->class_name }} ({{ $studentClass->section }})
            </div>
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th scope="row" style="width: 30%;">Class Name</th>
                            <td>{{ $studentClass->class_name }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Section</th>
                            <td>{{ $studentClass->section }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Assigned Teacher</th>
                            <td>{{ $studentClass->teacher ? $studentClass->teacher->first_name . ' ' . $studentClass->teacher->last_name : 'No teacher assigned' }}</td>
                        </tr>
                    </tbody>
                </table>
            <div class="card-footer text-start">
                <a href="{{ route('student_classes.index') }}" class="btn btn-secondary ">Back to List</a>
            </div>
    </div>
@endsection
