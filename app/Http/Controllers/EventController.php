<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('admin.event.list', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.event.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'event_name' => 'required|string|max:255',
            'club' => 'required|string|max:255',
            'date' => 'required|date',
            'venue' => 'required|string|max:255',
            'participants' => 'required|string',
        ]);

        Event::create($validated);

        return redirect()->route('admin.event.list')->with('success', 'Event added successfully.');
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
    public function edit(Event $event)
    {
        return view('admin.event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'event_name' => 'required|string|max:255',
            'club' => 'required|string|max:255',
            'date' => 'required|date',
            'venue' => 'required|string|max:255',
            'participants' => 'required|string',
        ]);

        $event->update($validated);

        return redirect()->route('admin.event.list')->with('success', 'Event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.event.list')->with('success', 'Event deleted successfully.');
    }
}
