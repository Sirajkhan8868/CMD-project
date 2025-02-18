@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Result</h1>
    <form action="{{ route('results.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="student_id" class="form-label">Student</label>
            <select name="student_id" class="form-select" required>
                @foreach ($students as $student)
                    <option value="{{ $student->id }}">{{ $student->first_name }} {{ $student->last_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="exam_id" class="form-label">Exam</label>
            <select name="exam_id" class="form-select" required>
                @foreach ($exams as $exam)
                    <option value="{{ $exam->id }}">{{ $exam->exam_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="marks_obtained" class="form-label">Marks Obtained</label>
            <input type="number" name="marks_obtained" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="grade" class="form-label">Grade</label>
            <input type="text" name="grade" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
