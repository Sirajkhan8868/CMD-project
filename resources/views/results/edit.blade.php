@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Result</h1>
    <form action="{{ route('results.update', $result->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="student_id" class="form-label">Student</label>
            <select name="student_id" class="form-select" required>
                @foreach ($students as $student)
                    <option value="{{ $student->id }}" {{ $student->id == $result->student_id ? 'selected' : '' }}>
                        {{ $student->first_name }} {{ $student->last_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="exam_id" class="form-label">Exam</label>
            <select name="exam_id" class="form-select" required>
                @foreach ($exams as $exam)
                    <option value="{{ $exam->id }}" {{ $exam->id == $result->exam_id ? 'selected' : '' }}>
                        {{ $exam->exam_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="marks_obtained" class="form-label">Marks Obtained</label>
            <input type="number" name="marks_obtained" class="form-control" value="{{ $result->marks_obtained }}" required>
        </div>

        <div class="mb-3">
            <label for="grade" class="form-label">Grade</label>
            <input type="text" name="grade" class="form-control" value="{{ $result->grade }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('results.index') }}" class="btn btn-secondary ">Back to Results</a>

    </form>

</div>
@endsection
