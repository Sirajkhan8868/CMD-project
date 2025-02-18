@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4 text-center">Fee Payment Details</h1>

        <div class="card-header bg-primary text-white text-right">
            Fee Payment for {{ $fee->student->first_name }} {{ $fee->student->last_name }}
        </div>
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th scope="row" style="width: 30%;">Amount</th>
                        <td>{{ $fee->amount }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Payment Date</th>
                        <td>{{ $fee->payment_date }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Status</th>
                        <td>{{ $fee->status }}</td>
                    </tr>
                </tbody>
            </table>

    <div class="text-right mt-4">
        <a href="{{ route('fees.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Back to List
        </a>
    </div>
</div>
@endsection
