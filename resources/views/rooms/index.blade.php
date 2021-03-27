@extends('layouts.app')

@section('content')

    @if (count($rooms) > 0)
        <table class="table table-striped">
            <tr>
                <th>Room Number</th>
                <th>Room Name</th>
                <th>Room Description</th>
                <th>Max Occupancy</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        @foreach ($rooms as $room)
            <tr>
                <td>{{$room->room_number}}</td>
                <td>{{$room->room_name}}</td>
                <td>{{$room->room_description}}</td>
                <td>{{$room->max_occupancy}}</td>
                <td><a href="/rooms/{{$room->id}}/edit" class="btn btn-default">Edit</a></td>
                <td><a href="/rooms/{{$room->id}}" class="btn btn-default">Delete</a></td>
            </tr>
        @endforeach
        </table>
        <div class="mt-3">
            <a href="/rooms/create" class="btn btn-info" role="button">Create New Room</a>
        </div>
    @else
        <p> No room found</p>
    @endif

@endsection