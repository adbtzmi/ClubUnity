<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applications = Application::all();
        return view('admin.application.list', compact('applications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        {
            return view('admin.application.add');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'student_id' => 'required|string|max:255',
            'club' => 'required|string',
            'status' => 'required|string',
        ]);

        Application::create($validated);

        return redirect()->route('admin.application.list')->with('success', 'Application added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Application $application)
    {
        return view('admin.application.edit', compact('application'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Application $application)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'student_id' => 'required|string|max:255' . $application->id,
            'club' => 'required|string',
            'status' => 'required|string',
        ]);

        $application->update($validated);

        return redirect()->route('admin.application.list')->with('success', 'Application updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application)
    {
        $application->delete();
        return redirect()->route('admin.application.list')->with('success', 'Application deleted successfully.');
    }
}
