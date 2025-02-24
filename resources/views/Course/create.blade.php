@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Add New Course</h1>

        <form action="{{ route('courses.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="course_name">Course Name</label>
                <input type="text" name="course_name" id="course_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="course_code">Course Code</label>
                <input type="text" name="course_code" id="course_code" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="teacher_id">Teacher</label>
                <select name="teacher_id" id="teacher_id" class="form-control" required>
                    <option value="">Select Teacher</option>
                    @foreach ($teachers as $teacher)
                        <option value="{{ $teacher->id }}">{{ $teacher->first_name }} {{ $teacher->last_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="credits">Credits</label>
                <input type="number" name="credits" id="credits" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success mt-3">Save Course</button>
        </form>
    </div>
@endsection
