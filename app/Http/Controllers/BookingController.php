<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Room;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Bookings',
            'bookings' => Booking::all()->sortBy('booking_date'),
        ];

        return view('pages.bookings', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('bookings');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'room_number' => 'required',
            'guest_name' => 'required',
            'booking_date' => 'required',
        ]);

        $room = Room::where('room_number', $request->room_number)->first();

        if (!isset($room->id)) {
            return redirect('bookings')->with('error', 'Room number not found');
        }

        // Create Booking
        $booking = new Booking;
        $booking->room_id = $room->id;
        $booking->guest_name = $request->guest_name;
        $booking->booking_date = $request->booking_date;
        $booking->save();

        return redirect('bookings')->with('success', 'Booking Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('bookings');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return redirect('bookings');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return redirect('bookings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Delete Booking
        $booking = Booking::find($id);
        $booking->delete();

        return redirect('bookings')->with('success', 'Booking Deleted');
    }
}
