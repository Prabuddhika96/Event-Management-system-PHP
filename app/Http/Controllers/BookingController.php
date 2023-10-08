<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Event;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function buyTicket($eventId, $ticketType)
    {
        // Find the event by its ID
        $event = Event::findOrFail($eventId);

        // Determine the ticket type based on the provided $ticketType parameter
        switch ($ticketType) {
            case 1:
                $ticketField = 't1_sold';
                $ticketCountField = 't1_count';
                $ticketName = 't1';
                break;
            case 2:
                $ticketField = 't2_sold';
                $ticketCountField = 't2_count';
                $ticketName = 't2';
                break;
            case 3:
                $ticketField = 't3_sold';
                $ticketCountField = 't3_count';
                $ticketName = 't3';
                break;
            default:
                // Handle invalid ticket type, if necessary
                return redirect()->back()->with('error', 'Invalid ticket type.');
        }

        // Check if there are available tickets for the specified ticket type
        if ($event->{$ticketField} < $event->{$ticketCountField}) {
            // Increment the sold ticket count for the specified ticket type
            $event->{$ticketField} += 1;

            // Save the changes
            $event->save();

            // add it to the bboking table
            $booking = Booking::where('user_id', auth()->user()->id)
                ->where('event_id', $eventId)
                ->where('ticket_id', $ticketType)
                ->first();

            if ($booking) {
                // If the booking exists, update the ticket_count field
                $booking->ticket_count += 1;
                $booking->save();
            } else {
                // If the booking does not exist, create a new booking entry
                $booking = new Booking();
                $booking->user_id = auth()->user()->id;
                $booking->event_id = $eventId;
                $booking->ticket_id = $ticketType;
                $booking->ticket_count = 1; // Initialize ticket_count to 1 for the new booking

                $booking->save();
            }


            // Redirect to a success page or return a response indicating successful purchase
            return redirect()->back()->with('success', 'Ticket purchased successfully for ' . $ticketName . ' tickets.');
        } else {
            // Handle the case where all tickets of the specified type are sold out
            return redirect()->back()->with('error', 'Sorry, ' . $ticketName . ' tickets are sold out.');
        }
    }
}