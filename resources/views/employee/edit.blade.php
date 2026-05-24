@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Employee</h1>
        <form action="{{ route('employees.update', $employees->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" required value="{{ old('fname', $employees->fname) }}">
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" required value="{{ old('lname', $employees->lname) }}">
            </div>
            <div class="mb-3">
                <label for="mname" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="mname" name="mname" value="{{ old('mname', $employees->mname) }}">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age" required value="{{ old('age', $employees->age) }}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" required value="{{ old('address', $employees->address) }}">
            </div>
            <div class="mb-3">
                <label for="zipcode" class="form-label">Zip Code</label>
                <input type="text" class="form-control" id="zipcode" name="zipcode" required value="{{ old('zipcode', $employees->zipcode) }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection