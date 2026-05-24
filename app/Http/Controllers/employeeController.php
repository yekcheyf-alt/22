<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class employeeController extends Controller
{
    public function index()
    {
        $employees = \App\Models\employee::all();
        return view('employee.index', compact('employees'));
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
        $employees = \App\Models\employee::findOrFail($id);
        return view('employee.edit', compact('employees'));
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

        $employees = \App\Models\employee::findOrFail($id);
        $employees->update($request->all());

        return redirect()->route('employee.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy($id)
    {
        $employees = \App\Models\employee::findOrFail($id);
        $employees->delete();

        return redirect()->route('employee.index')->with('success', 'Employee deleted successfully.');
    }
}
