<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

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
            'display' => 'table'
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
            'display' => 'create'
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
        $room = Room::find($id);
        $room->delete();
        return redirect('rooms')->with('success', 'Room Deleted');
    }
}
