@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Results</h1>
    <a href="{{ route('results.create') }}" class="btn btn-primary mb-3">Add Result</a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Student</th>
                <th>Exam</th>
                <th>Marks Obtained</th>
                <th>Grade</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($results as $result)
            <tr>
                <td>{{ $result->student->first_name }} {{ $result->student->last_name }}</td>
                <td>{{ $result->exam->exam_name }}</td>
                <td>{{ $result->marks_obtained }}</td>
                <td>{{ $result->grade }}</td>
                <td>
                    <a href="{{ route('results.show', $result) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('results.edit', $result) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('results.destroy', $result) }}" method="POST" style="display:inline;">
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
