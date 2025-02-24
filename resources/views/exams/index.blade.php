@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Exam Records</h1>
    <a href="{{ route('exams.create') }}" class="btn btn-primary mb-3">Add New Exam</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Course</th>
                <th>Exam Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($exams as $exam)
            <tr>
                <td>{{ $exam->id }}</td>
                <td>{{ $exam->course->course_name }}</td>
                <td>{{ $exam->exam_date }}</td>
                <td>
                    <a href="{{ route('exams.show', $exam->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('exams.edit', $exam->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('exams.destroy', $exam->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
