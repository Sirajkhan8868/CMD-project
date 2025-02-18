@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Exam</h1>
    <form action="{{ route('exams.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="course_id">Course</label>
            <select name="course_id" class="form-control">
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="exam_date">Exam Date</label>
            <input type="date" name="exam_date" class="form-control">
        </div>

        <button type="submit" class="btn btn-success mt-3">Save Exam</button>
    </form>
</div>
@endsection
