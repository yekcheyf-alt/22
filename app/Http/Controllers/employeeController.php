<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\employee;
class employeeController extends Controller
{
    public function index()
    {
        $employees = employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'mname' => 'required',
            'age' => 'required',
            'zipcode' => 'required',
            'address' => 'required',
        ]);

        employee::create($request->all());

        return redirect()->route('employee.index')->with('success', 'Employee created successfully.');
    }

    public function edit($id)
    {
        $employees = employee::findOrFail($id);
        return view('employees.edit', compact('employees'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'mname' => 'required',
            'age' => 'required',
            'zipcode' => 'required',
            'address' => 'required',
        ]);

        $employees = employee::findOrFail($id);
        $employees->update($request->all());

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy($id)
    {
        $employees = employee::findOrFail($id);
        $employees->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
