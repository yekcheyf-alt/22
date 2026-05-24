@extends('layouts.app');

@section('content')
    <div class="container">
        <h1>Employees</h1>
        <a href="{{ route('employees.create') }}" class="btn btn-primary">Add Employee</a>
        <table class="table">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Middle Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Zip Code</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $student)
                    <tr>
                        <td>{{ $student->fname }}</td>
                        <td>{{ $student->lname }}</td>
                        <td>{{ $student->mname }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->zipcode }}</td>
                        <td>
                            <a href="{{ route('employees.edit', $student->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                            <form action="{{ route('employees.delete', $student->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection