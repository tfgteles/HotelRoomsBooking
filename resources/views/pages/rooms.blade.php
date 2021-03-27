@extends('layouts.app')

@section('content')

    @if ($display === 'create')
        {!! Form::open(['url' => 'rooms', 'method' => 'post']) !!}
            <div class="form-group">
                {{Form::label('room_number', 'Room number')}}
                {{Form::text('room_number', '', ['class' => 'form-control', 'placeholder' => 'Room number'])}}
            </div>
            <div class="form-group">
                {{Form::label('room_name', 'Room name')}}
                {{Form::text('room_name', '', ['class' => 'form-control', 'placeholder' => 'Room name'])}}
            </div>
            <div class="form-group">
                {{Form::label('room_description', 'Room description')}}
                {{Form::textarea('room_description', '', ['class' => 'form-control', 'placeholder' => 'Room description'])}}
            </div>
            <div class="form-group">
                {{Form::label('max_occupancy', 'Max occupancy')}}
                {{Form::number('max_occupancy', '', ['class' => 'form-control'])}}
            </div>
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
        <div>
            <a href="rooms" class="btn btn-info" role="button">Cancel</a>
        </div>
    @elseif ($display === 'edit')
        {!! Form::open(['url' => 'rooms/'.$room->id, 'method' => 'post']) !!}
            {{-- <div class="form-group">
                {{Form::label('room_number', 'Room number')}}
                {{Form::text('room_number', {{$room->room_number}}, ['class' => 'form-control', 'placeholder' => 'Room number'])}}
            </div>
            <div class="form-group">
                {{Form::label('room_name', 'Room name')}}
                {{Form::text('room_name', {{$room->room_name}}, ['class' => 'form-control', 'placeholder' => 'Room name'])}}
            </div> --}}
            <div class="form-group">
                {{Form::label('room_description', 'Room description')}}
                {{Form::textarea('room_description', $room->room_description, ['class' => 'form-control', 'placeholder' => 'Room description'])}}
            </div>
            {{-- <div class="form-group">
                {{Form::label('max_occupancy', 'Max occupancy')}}
                {{Form::number('max_occupancy', {{$room->max_occupancy}}, ['class' => 'form-control'])}}
            </div> --}}
            {{Form::hidden('_method', 'put')}}
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
        <div>
            <a href="rooms" class="btn btn-info" role="button">Cancel</a>
        </div>
    @elseif (count($rooms) > 0)
        <table>
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
                <td><a href="{{$room->id}}/edit">Edit</a></td>
                <td><a href="/{{$room->id}}">Delete</a></td>
            </tr>
        @endforeach
        </table>
        <div>
            <a href="rooms/create" class="btn btn-info" role="button">Create New Room</a>
        </div>
    @else
        <p> No room found</p>
    @endif

@endsection