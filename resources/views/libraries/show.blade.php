@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Library Book Details</h1>

    <table class="table table-hover">
        <tr>
            <th>Title</th>
            <td>{{ $library->title }}</td>
        </tr>
        <tr>
            <th>Author</th>
            <td>{{ $library->author }}</td>
        </tr>
        <tr>
            <th>ISBN</th>
            <td>{{ $library->isbn }}</td>
        </tr>
        <tr>
            <th>Quantity</th>
            <td>{{ $library->quantity }}</td>
        </tr>
    </table>

    <a href="{{ route('libraries.index') }}" class="btn btn-secondary">Back to Library</a>
</div>
@endsection
