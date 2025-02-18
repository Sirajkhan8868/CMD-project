@extends('layouts.app')

@section('content')
<h1>Admin Details</h1>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Admin Username: {{ $admin->username }}</h5>
        <p class="card-text">
            <strong>Role:</strong> {{ $admin->role }}
        </p>
        <a href="{{ route('admins.edit', $admin) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('admins.destroy', $admin) }}" method="POST" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a href="{{ route('admins.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
</div>
@endsection
