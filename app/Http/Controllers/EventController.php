<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $latestEvent = Event::latest()->first();
        $approvedEvents = Event::where('approved', 1)->get();

        // Pass the latest event to the view
        // dd($latestEvent->attributes);
        return view('home.home', compact('latestEvent', 'approvedEvents'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'event_name' => 'required|min:1',
            'date' => 'required|date',
            'time' => 'required',
            'location' => 'required|min:2',
            'description' => 'required',
            'category' => 'required',
            't1_name' => 'required',
            't1_price' => 'required',
            't1_count' => 'required',
            't2_name' => 'required',
            't2_price' => 'required',
            't2_count' => 'required',
            't3_name' => 'required',
            't3_price' => 'required',
            't3_count' => 'required',
            'user_id' => 'required',
        ]);

        // Create and save the event
        $event = new Event($validatedData);
        $event->user_id = $request->input('user_id'); // Get user ID from the request
        $event->approved = 0;
        $event->t1_sold = 0;
        $event->t2_sold = 0;
        $event->t3_sold = 0;
        $event->save();

        // Redirect to a success page or any other action you want
        return redirect('/')->with('success', 'Event created successfully!');
    }

    public function allApprovedEvents()
    {
        $events = Event::where('approved', 1)->get();
        return view('event.allevents', ['events' => $events]);
    }

    public function showEvent($event)
    {
        $eventData = Event::find($event);
        return view('event.event', compact('eventData'));
    }
}
