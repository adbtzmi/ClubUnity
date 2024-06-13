<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('admin.student.list', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.student.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'student_id' => 'required|string|max:255|unique:students',
            'kulliyyah' => 'required|string',
            'year' => 'nullable|string',
        ]);

        Student::create($validated);

        return redirect()->route('admin.student.list')->with('success', 'Student added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id); // Retrieve the student data from the database
        return view('admin.student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'student_id' => 'required|string|max:255|unique:students,student_id,' . $student->id,
            'kulliyyah' => 'required|string',
            'year' => 'nullable|string',
        ]);

        $student->update($validated);

        return redirect()->route('admin.student.list')->with('success', 'Student updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('admin.student.list')->with('success', 'Student deleted successfully.');
    }
}
