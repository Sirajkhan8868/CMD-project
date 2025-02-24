@extends('layouts.app')

@section('content')
    <h1>Edit Student</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" value="{{ $student->first_name }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" value="{{ $student->last_name }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="date_of_birth">Date of Birth</label>
            <input type="date" name="date_of_birth" value="{{ $student->date_of_birth }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" class="form-control" required>
                <option value="Male" @if($student->gender == 'Male') selected @endif>Male</option>
                <option value="Female" @if($student->gender == 'Female') selected @endif>Female</option>
            </select>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea name="address" class="form-control" required>{{ $student->address }}</textarea>
        </div>
        <div class="form-group">
            <label for="contact">Contact</label>
            <input type="text" name="contact" value="{{ $student->contact }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="contact">Email</label>
            <input type="text" name="email" value="{{ $student->email }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="guardian_id">Guardian</label>
            <select name="guardian_id" class="form-control" required>
                @foreach($guardians as $guardian)
                    <option value="{{ $guardian->id }}" @if($student->guardian_id == $guardian->id) selected @endif>{{ $guardian->first_name }} {{ $guardian->last_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="student_class_id">Class</label>
            <select name="student_class_id" class="form-control" required>
                @foreach($studentClasses as $studentClass)
                    <option value="{{ $studentClass->id }}" @if($student->student_class_id == $studentClass->id) selected @endif>{{ $studentClass->class_name }} - {{ $studentClass->section }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="enrollment_date">Enrollment Date</label>
            <input type="date" name="enrollment_date" value="{{ $student->enrollment_date }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-warning mt-2">Update Student</button>
    </form>
@endsection
