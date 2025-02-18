@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4 text-start">Attendance Details</h1>

            <div class="card-header bg-primary text-white text-right">
                Attendance Record for {{ $attendance->student->first_name }} {{ $attendance->student->last_name }}
            </div>
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th scope="row" style="width: 30%;">Student</th>
                            <td>{{ $attendance->student->first_name }} {{ $attendance->student->last_name }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Class</th>
                            <td>{{ $attendance->studentClass->class_name }} - {{ $attendance->studentClass->section }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Date</th>
                            <td>{{ $attendance->date }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Status</th>
                            <td>{{ $attendance->status }}</td>
                        </tr>
                    </tbody>
                </table>
            <div class="card-footer text-right">
                <a href="{{ route('attendances.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Back to Attendance List
                </a>
            </div>
    </div>
@endsection
