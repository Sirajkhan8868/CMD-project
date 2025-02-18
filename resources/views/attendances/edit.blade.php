@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Edit Attendance</h1>

        <form action="{{ route('attendances.update', $attendance->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="student_id">Student</label>
                <select name="student_id" id="student_id" class="form-control" required>
                    <option value="">Select Student</option>
                    @foreach ($students as $student)
                        <option value="{{ $student->id }}" @if($attendance->student_id == $student->id) selected @endif>
                            {{ $student->first_name }} {{ $student->last_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="student_class_id">Class</label>
                <select name="student_class_id" id="student_class_id" class="form-control" required>
                    <option value="">Select Class</option>
                    @foreach ($studentClasses as $studentClass)
                        <option value="{{ $studentClass->id }}" @if($attendance->student_class_id == $studentClass->id) selected @endif>
                            {{ $studentClass->class_name }} - {{ $studentClass->section }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date" id="date" class="form-control" value="{{ $attendance->date }}" required>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="Present" @if($attendance->status == 'Present') selected @endif>Present</option>
                    <option value="Absent" @if($attendance->status == 'Absent') selected @endif>Absent</option>
                    <option value="Late" @if($attendance->status == 'Late') selected @endif>Late</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success mt-3">Update Attendance</button>
        </form>
    </div>
@endsection
