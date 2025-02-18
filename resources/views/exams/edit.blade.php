@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Exam</h1>
    <form action="{{ route('exams.update', $exam->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="course_id">Course</label>
            <select name="course_id" class="form-control">
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}" {{ $course->id == $exam->course_id ? 'selected' : '' }}>
                        {{ $course->course_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="exam_date">Exam Date</label>
            <input type="date" name="exam_date" class="form-control" value="{{ $exam->exam_date }}">
        </div>

        <button type="submit" class="btn btn-success mt-2">Update Exam</button>
    </form>
</div>
@endsection
