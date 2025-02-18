<!-- resources/views/libraries/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Library</h1>
    <a href="{{ route('libraries.create') }}" class="btn btn-primary mb-3">Add Book</a>

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>ISBN</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libraries as $library)
            <tr>
                <td>{{ $library->title }}</td>
                <td>{{ $library->author }}</td>
                <td>{{ $library->isbn }}</td>
                <td>{{ $library->quantity }}</td>
                <td>
                    <a href="{{ route('libraries.show', $library) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('libraries.edit', $library) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('libraries.destroy', $library) }}" method="POST" style="display:inline;">
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
