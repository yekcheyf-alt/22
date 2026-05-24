@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Delete Employee</h1>
        <p>Are you sure you want to delete this employee?</p>
        <form action="{{ route('employees.delete', $employee->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Yes, Delete</button>
            <a href="{{ route('employees.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection