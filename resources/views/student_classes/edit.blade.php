@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Student Class</h1>
    <form action="{{ route('student_classes.update', $studentClass->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="class_name">Class Name</label>
            <input type="text" name="class_name" class="form-control" value="{{ $studentClass->class_name }}" required>
        </div>

        <div class="form-group">
            <label for="section">Section</label>
            <input type="text" name="section" class="form-control" value="{{ $studentClass->section }}" required>
        </div>

        <div class="form-group">
            <label for="teacher_id">Assign Teacher</label>
            <select name="teacher_id" class="form-control">
                @foreach ($teachers as $teacher)
                    <option value="{{ $teacher->id }}" {{ $teacher->id == $studentClass->teacher_id ? 'selected' : '' }}>
                        {{ $teacher->first_name }} {{ $teacher->last_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success mt-3">Update Class</button>
    </form>
</div>
@endsection
