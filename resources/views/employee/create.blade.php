@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Employee</h1>
        <form action="{{ route('employees.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" required>
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" required>
            </div>
            <div class="mb-3">
                <label for="mname" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="mname" name="mname">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="mb-3">
                <label for="zipcode" class="form-label">Zip Code</label>
                <input type="text" class="form-control" id="zipcode" name="zipcode" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @endsection