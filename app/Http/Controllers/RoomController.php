<?php
// StAuth10065: I Tiago Franco de Goes Teles, 000786450 certify that this material is my original work. No other person's work has been used without due acknowledgement. I have not made my work available to anyone else.

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Rooms',
            'rooms' => Room::all()->sortBy('room_number'),
        ];

        return view('rooms.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Rooms',
        ];

        return view('rooms.create', $data);
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
            'room_name' => 'required',
            'room_description' => 'required',
            'max_occupancy' => 'required',
        ]);

        $room = Room::where('room_number', $request->room_number)->first();

        if (isset($room->id)) {
            return redirect('rooms')->with('error', 'Room number already exists');
        }

        // Create Room
        $room = new Room;
        $room->room_number = $request->room_number;
        $room->room_name = $request->room_name;
        $room->room_description = $request->room_description;
        $room->max_occupancy = $request->max_occupancy;
        $room->save();

        return redirect('rooms')->with('success', 'Room Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =[
            'title' => 'Room',
            'room' => Room::find($id),
        ];

        return view('rooms.delete', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =[
            'title' => 'Room',
            'room' => Room::find($id),
        ];

        return view('rooms.edit', $data);
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
        $this->validate($request, [
            'room_description' => 'required',
        ]);

        // Update Room
        $room = Room::find($id);
        $room->room_description = $request->room_description;
        $room->save();

        return redirect('rooms')->with('success', 'Room Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Delete Room
        $room = Room::find($id);
        $room->delete();

        // Delete associated Bookings
        $deletedRows = Booking::where('room_id', $id)->delete();

        return redirect('rooms')->with('success', 'Room Deleted, and its associated bookings');
    }
}
