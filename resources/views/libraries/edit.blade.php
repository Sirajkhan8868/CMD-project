<!-- resources/views/libraries/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Library Book</h1>
    <form action="{{ route('libraries.update', $library->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="student_id" class="form-label">Student</label>
            <select name="student_id" class="form-select" required>
                @foreach ($students as $student)
                    <option value="{{ $student->id }}" {{ $student->id == $library->student_id ? 'selected' : '' }}>
                        {{ $student->first_name }} {{ $student->last_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Book Title</label>
            <input type="text" name="title" class="form-control" value="{{ $library->title }}" required>
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" name="author" class="form-control" value="{{ $library->author }}" required>
        </div>

        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="text" name="isbn" class="form-control" value="{{ $library->isbn }}" required>
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" name="quantity" class="form-control" value="{{ $library->quantity }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('libraries.index') }}" class="btn btn-secondary ">Back to Library</a>

    </form>

</div>
@endsection
