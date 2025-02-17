@extends('layouts.app')

@section('content')
    <h1>Add New Student</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="date_of_birth">Date of Birth</label>
            <input type="date" name="date_of_birth" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" class="form-control" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea name="address" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="contact">Contact</label>
            <input type="text" name="contact" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="guardian_id">Guardian</label>
            <select name="guardian_id" class="form-control" required>
                @foreach($guardians as $guardian)
                    <option value="{{ $guardian->id }}">{{ $guardian->first_name }} {{ $guardian->last_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="student_class_id">Class</label>
            <select name="student_class_id" class="form-control" required>
                @foreach($studentClasses as $studentClass)
                    <option value="{{ $studentClass->id }}">{{ $studentClass->class_name }} - {{ $studentClass->section }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success mt-2">Save Student</button>
    </form>
@endsection
