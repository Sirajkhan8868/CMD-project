@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Fee Payment</h1>
    <form action="{{ route('fees.update', $fee->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="student_id">Student</label>
            <select name="student_id" class="form-control">
                @foreach ($students as $student)
                    <option value="{{ $student->id }}" {{ $student->id == $fee->student_id ? 'selected' : '' }}>
                        {{ $student->first_name }} {{ $student->last_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" name="amount" class="form-control" value="{{ $fee->amount }}">
        </div>

        <div class="form-group">
            <label for="payment_date">Payment Date</label>
            <input type="date" name="payment_date" class="form-control" value="{{ $fee->payment_date }}">
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control">
                <option value="Paid" {{ $fee->status == 'Paid' ? 'selected' : '' }}>Paid</option>
                <option value="Unpaid" {{ $fee->status == 'Unpaid' ? 'selected' : '' }}>Unpaid</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success mt-2">Update Fee</button>
    </form>
</div>
@endsection
