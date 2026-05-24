<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class employeeController extends Controller
{
    public function index()
    {
        $employee = \App\Models\employee::all();
        return view('employee.index', compact('employee'));
    }

    public function create()
    {
        return view('employee.create');
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

        \App\Models\employee::create($request->all());

        return redirect()->route('employee.index')->with('success', 'Employee created successfully.');
    }

    public function edit($id)
    {
        $employee = \App\Models\employee::findOrFail($id);
        return view('employee.edit', compact('employee'));
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

        $employee = \App\Models\employee::findOrFail($id);
        $employee->update($request->all());

        return redirect()->route('employee.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy($id)
    {
        $employee = \App\Models\employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employee.index')->with('success', 'Employee deleted successfully.');
    }
}
