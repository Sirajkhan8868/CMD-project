@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Admin Details</h1>
    <table class="table  table-hover ">
        <tbody>
            <tr>
                <th scope="row">Username</th>
                <td>{{ $admin->username }}</td>
            </tr>
            <tr>
                <th scope="row">Role</th>
                <td>{{ $admin->role }}</td>
            </tr>
        </tbody>
    </table>
    <div class="d-flex mt-3">
        <a href="{{ route('admins.edit', $admin) }}" class="btn btn-warning me-2">
            <i class="bi bi-pencil-square"></i> Edit
        </a>
        <form action="{{ route('admins.destroy', $admin) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
                <i class="bi bi-trash"></i> Delete
            </button>
        </form>
        <a href="{{ route('admins.index') }}" class="btn btn-secondary ms-2">
            <i class="bi bi-arrow-left"></i> Back to List
        </a>
    </div>
</div>
@endsection
