<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clubs = Club::all();
        return view('admin.club.list', compact('clubs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.club.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'club_id' => 'required|string|max:255|unique:clubs',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,giv,svg|max:2048',
        ]);

        Club::create($validated);

        return redirect()->route('admin.club.list')->with('success', 'Club added successfully.');
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
    public function edit($id)
    {
        $club = Club::findOrFail($id); // Retrieve the club data from the database
        return view('admin.club.edit', compact('club'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Club $club)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'club_id' => 'required|string|max:255|unique:clubs,club_id,' . $club->id,
            'description' => 'required|string',
            'image' => 'nullable|string',
        ]);

        $club->update($validated);

        return redirect()->route('admin.club.list')->with('success', 'Club updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Club $club)
    {
        $club->delete();
        return redirect()->route('admin.club.list')->with('success', 'Club deleted successfully.');
    }
}
