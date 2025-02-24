@extends('layouts.app')

@section('content')
<div>

<h1 class="text-center">Admins</h1>
<a href="{{ route('admins.create') }}" class="btn btn-primary">Add Admin</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($admins as $admin)
        <tr>
            <td>{{ $admin->id }}</td>
            <td>{{ $admin->username }}</td>
            <td>{{ $admin->role }}</td>
            <td>
                <a href="{{ route('admins.show', $admin) }}" class="btn btn-info">View</a>
                <a href="{{ route('admins.edit', $admin) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('admins.destroy', $admin) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
