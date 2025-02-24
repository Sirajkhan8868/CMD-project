@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4 text-center">Student Details</h1>

            <div class="card-header bg-primary text-white text-start">
                Student: {{ $student->first_name }} {{ $student->last_name }}
            </div>

            <div class="table-responsive">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th scope="row" style="width: 30%;">First Name</th>
                            <td>{{ $student->first_name }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Last Name</th>
                            <td>{{ $student->last_name }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Date of Birth</th>
                            <td>{{ $student->date_of_birth }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Gender</th>
                            <td>{{ $student->gender }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Address</th>
                            <td>{{ $student->address }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Contact</th>
                            <td>{{ $student->contact }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td>{{ $student->email }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Enrollment Date</th>
                            <td>{{ $student->enrollment_date }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Guardian</th>
                            <td>{{ $student->guardian->first_name }} {{ $student->guardian->last_name }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Class</th>
                            <td>{{ $student->studentClass->class_name }} - {{ $student->studentClass->section }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="card-footer text-start">
                <a href="{{ route('students.index') }}" class="btn btn-primary">
                    <i class="bi bi-arrow-left"></i> Back to List
                </a>
            </div>
    </div>
@endsection
