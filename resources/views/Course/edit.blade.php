@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Edit Course</h1>

        <form action="{{ route('courses.update', $course->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="course_name">Course Name</label>
                <input type="text" name="course_name" id="course_name" class="form-control" value="{{ $course->course_name }}" required>
            </div>

            <div class="form-group">
                <label for="course_code">Course Code</label>
                <input type="text" name="course_code" id="course_code" class="form-control" value="{{ $course->course_code }}" required>
            </div>

            <div class="form-group">
                <label for="teacher_id">Teacher</label>
                <select name="teacher_id" id="teacher_id" class="form-control" required>
                    @foreach ($teachers as $teacher)
                        <option value="{{ $teacher->id }}" @if($course->teacher_id == $teacher->id) selected @endif>
                            {{ $teacher->first_name }} {{ $teacher->last_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="credits">Credits</label>
                <input type="number" name="credits" id="credits" class="form-control" value="{{ $course->credits }}" required>
            </div>

            <button type="submit" class="btn btn-success mt-3">Update Course</button>
        </form>
    </div>
@endsection
