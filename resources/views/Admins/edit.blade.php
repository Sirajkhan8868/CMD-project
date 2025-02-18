@extends('layouts.app')

@section('content')
<h1>Edit Admin</h1>
<form action="{{ route('admins.update', $admin) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="form-control" value="{{ old('username', $admin->username) }}" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Leave blank to keep current password">
    </div>
    <div class="form-group">
        <label for="role">Role</label>
        <input type="text" name="role" id="role" class="form-control" value="{{ old('role', $admin->role) }}" required>
    </div>
    <button type="submit" class="btn btn-success mt-2">Update</button>
    <a href="{{ route('admins.index') }}" class="btn btn-secondary mt-2">Cancel</a>
</form>
@endsection
