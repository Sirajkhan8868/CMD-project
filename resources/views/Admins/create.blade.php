@extends('layouts.app')

@section('content')

<h1>Add Admin</h1>
<form action="{{ route('admins.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="role">Role</label>
        <input type="text" name="role" id="role" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success mt-2">Save</button>
</form>

@endsection
