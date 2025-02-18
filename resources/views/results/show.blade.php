@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Result Details</h1>

    <table class="table table-hover">
        <tr>
            <th>Student</th>
            <td>{{ $result->student->first_name }} {{ $result->student->last_name }}</td>
        </tr>
        <tr>
            <th>Exam</th>
            <td>{{ $result->exam->exam_name }}</td>
        </tr>
        <tr>
            <th>Marks Obtained</th>
            <td>{{ $result->marks_obtained }}</td>
        </tr>
        <tr>
            <th>Grade</th>
            <td>{{ $result->grade }}</td>
        </tr>
    </table>

    <a href="{{ route('results.index') }}" class="btn btn-secondary">Back to Results</a>
</div>
@endsection
