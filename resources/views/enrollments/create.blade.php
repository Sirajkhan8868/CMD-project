@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Enrollment</h1>
    <form action="{{ route('enrollments.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="student_id">Student</label>
            <select name="student_id" class="form-control">
                @foreach ($students as $student)
                    <option value="{{ $student->id }}">{{ $student->first_name }} {{ $student->last_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="course_id">Course</label>
            <select name="course_id" class="form-control">
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="enrollment_date">Enrollment Date</label>
            <input type="date" name="enrollment_date" class="form-control">
        </div>

        <button type="submit" class="btn btn-success mt-3">Save Enrollment</button>
    </form>
</div>
@endsection
