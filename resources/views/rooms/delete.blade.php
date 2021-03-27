@extends('layouts.app')

@section('content')

    {!! Form::open(['url' => 'rooms/'.$room->id, 'method' => 'post']) !!}
        <h3>Delete the room number {{$room->room_number}}?</h3>
        {{-- <div class="form-group">
            {{Form::label('room_number', 'Room number')}}
            {{Form::text('room_number', {{$room->room_number}}, ['class' => 'form-control', 'placeholder' => 'Room number'])}}
        </div>
        <div class="form-group">
            {{Form::label('room_name', 'Room name')}}
            {{Form::text('room_name', {{$room->room_name}}, ['class' => 'form-control', 'placeholder' => 'Room name'])}}
        </div>
        <div class="form-group">
            {{Form::label('room_description', 'Room description')}}
            {{Form::textarea('room_description', $room->room_description, ['class' => 'form-control', 'placeholder' => 'Room description'])}}
        </div> --}}
        {{Form::hidden('_method', 'delete')}}
        {{Form::submit('Delete', ['class' => 'btn btn-primary'])}}
        <a href="/rooms" class="btn btn-info" role="button">Cancel</a>
    {!! Form::close() !!}
    {{-- <div class="mt-3">
        <a href="rooms" class="btn btn-info" role="button">Cancel</a>
    </div> --}}

@endsection