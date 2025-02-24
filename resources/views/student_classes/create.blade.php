@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Student Class</h1>
    <form action="{{ route('student_classes.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="class_name">Class Name</label>
            <input type="text" name="class_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="section">Section</label>
            <input type="text" name="section" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="teacher_id">Assign Teacher</label>
            <select name="teacher_id" class="form-control">
                @foreach ($teachers as $teacher)
                    <option value="{{ $teacher->id }}">{{ $teacher->first_name }} {{ $teacher->last_name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success mt-3">Save Class</button>
    </form>
</div>
@endsection
