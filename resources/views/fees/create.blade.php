@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Record Fee Payment</h1>
    <form action="{{ route('fees.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="student_id">Student</label>
            <select name="student_id" class="form-control">
                @foreach ($students as $student)
                    <option value="{{ $student->id }}">{{ $student->first_name }} {{ $student->last_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" name="amount" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="payment_date">Payment Date</label>
            <input type="date" name="payment_date" class="form-control">
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control">
                <option value="Paid">Paid</option>
                <option value="Pending">Pending</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success mt-3">Save Fee</button>
    </form>
</div>
@endsection
