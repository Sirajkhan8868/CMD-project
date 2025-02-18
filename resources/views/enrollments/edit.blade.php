@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Enrollment</h1>
    <form action="{{ route('enrollments.update', $enrollment->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="student_id">Student</label>
            <select name="student_id" class="form-control">
                @foreach ($students as $student)
                    <option value="{{ $student->id }}" {{ $student->id == $enrollment->student_id ? 'selected' : '' }}>
                        {{ $student->first_name }} {{ $student->last_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="course_id">Course</label>
            <select name="course_id" class="form-control">
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}" {{ $course->id == $enrollment->course_id ? 'selected' : '' }}>
                        {{ $course->course_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="enrollment_date">Enrollment Date</label>
            <input type="date" name="enrollment_date" value="{{ $enrollment->enrollment_date }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-success mt-3">Update Enrollment</button>
    </form>
</div>
@endsection
