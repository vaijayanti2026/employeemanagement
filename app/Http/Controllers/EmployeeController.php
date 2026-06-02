<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;
use Illuminate\Validation\Rule;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the employees.
     */
    public function index()
    {
        $employees = Employee::orderBy('created_at', 'desc')->get();
        return response()->json($employees);
    }

    /**
     * Store a newly created employee in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:employees,email',
            'phone' => 'nullable|string|max:50',
            'position' => 'required|string|max:255',
            'salary' => 'required|numeric|min:0',
            'date_of_joining' => 'required|date',
        ]);

        $employee = Employee::create($validatedData);

        return response()->json([
            'message' => 'Employee created successfully!',
            'employee' => $employee
        ], 210); // Laravel standard 201 Created or custom success
    }

    /**
     * Display the specified employee.
     */
    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return response()->json($employee);
    }

    /**
     * Update the specified employee in storage.
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);

        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('employees')->ignore($employee->id),
            ],
            'phone' => 'nullable|string|max:50',
            'position' => 'required|string|max:255',
            'salary' => 'required|numeric|min:0',
            'date_of_joining' => 'required|date',
        ]);

        $employee->update($validatedData);

        return response()->json([
            'message' => 'Employee updated successfully!',
            'employee' => $employee
        ]);
    }

    /**
     * Remove the specified employee from storage.
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return response()->json([
            'message' => 'Employee deleted successfully!'
        ]);
    }
}
