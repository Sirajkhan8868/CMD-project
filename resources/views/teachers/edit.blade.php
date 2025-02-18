@extends('layouts.app')

@section('content')
<h1>Edit Teacher</h1>

<form action="{{ route('teachers.update', $teacher) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" id="first_name" class="form-control" value="{{ old('first_name', $teacher->first_name) }}" required>
    </div>
    <div class="form-group">
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" id="last_name" class="form-control" value="{{ old('last_name', $teacher->last_name) }}" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $teacher->email) }}" required>
    </div>
    <div class="form-group">
        <label for="contact">Contact</label>
        <input type="text" name="contact" id="contact" class="form-control" value="{{ old('contact', $teacher->contact) }}" required>
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" class="form-control" value="{{ old('address', $teacher->address) }}">
    </div>
    <div class="form-group">
        <label for="hire_date">Hire Date</label>
        <input type="date" name="hire_date" id="hire_date" class="form-control" value="{{ old('hire_date', $teacher->hire_date) }}" required>
    </div>
    <div class="form-group">
        <label for="enrollment_date">Enrollment Date</label>
        <input type="date" name="enrollment_date" id="enrollment_date" class="form-control" value="{{ old('enrollment_date', $teacher->enrollment_date) }}" required>
    </div>
    <div class="form-group">
        <label for="department_id">Department</label>
        <select name="department_id" id="department_id" class="form-control">
            <option value="">Select Department</option>
            @foreach($departments as $department)
                <option value="{{ $department->id }}" {{ $department->id == $teacher->department_id ? 'selected' : '' }}>
                    {{ $department->name }}
                </option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success mt-2">Update</button>
    <a href="{{ route('teachers.index') }}" class="btn btn-secondary mt-2">Cancel</a>
</form>
@endsection
