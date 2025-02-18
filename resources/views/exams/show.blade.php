@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4 text-right">Exam Details</h1>

        <div class="card-header bg-primary text-white text-right">
            Exam for {{ $exam->course->course_name }}
        </div>
            <table class="table table-hover ">
                <tbody>
                    <tr>
                        <th scope="row" style="width: 30%;">Course</th>
                        <td>{{ $exam->course->course_name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Exam Date</th>
                        <td>{{ $exam->exam_date }}</td>
                    </tr>
                </tbody>
            </table>

    <div class="text-right mt-2">
        <a href="{{ route('exams.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Back to List
        </a>
    </div>
</div>
@endsection
