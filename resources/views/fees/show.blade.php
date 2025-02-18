@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Fee Payment Details</h1>

    <div class="card">
        <div class="card-header bg-primary text-white">
            Fee Payment for {{ $fee->student->first_name }} {{ $fee->student->last_name }}
        </div>
        <div class="card-body">
            <p><strong>Amount:</strong> {{ $fee->amount }}</p>
            <p><strong>Payment Date:</strong> {{ $fee->payment_date }}</p>
            <p><strong>Status:</strong> {{ $fee->status }}</p>
        </div>
    </div>

    <a href="{{ route('fees.index') }}" class="btn btn-secondary mt-3">Back to List</a>
</div>
@endsection
