@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Fee Records</h1>
    <a href="{{ route('fees.create') }}" class="btn btn-primary mb-3">Add Fee Payment</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student</th>
                <th>Amount</th>
                <th>Payment Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fees as $fee)
            <tr>
                <td>{{ $fee->id }}</td>
                <td>{{ $fee->student->first_name }} {{ $fee->student->last_name }}</td>
                <td>{{ $fee->amount }}</td>
                <td>{{ $fee->payment_date }}</td>
                <td>{{ $fee->status }}</td>
                <td>
                    <a href="{{ route('fees.show', $fee->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('fees.edit', $fee->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('fees.destroy', $fee->id) }}" method="POST" style="display:inline-block;">
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
