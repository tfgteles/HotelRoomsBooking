{{-- StAuth10065: I Tiago Franco de Goes Teles, 000786450 certify that this material is my original work. No other person's work has been used without due acknowledgement. I have not made my work available to anyone else. --}}

@extends('layouts.app')

@section('content')

    {!! Form::open(['url' => 'rooms/'.$room->id, 'method' => 'post']) !!}

        <div class="form-group">
            {{Form::label('room_description', 'Room '.$room->room_number.' description')}}
            {{Form::textarea('room_description', $room->room_description, ['class' => 'form-control', 'placeholder' => 'Room description'])}}
        </div>

        {{Form::hidden('_method', 'put')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        <a href="/rooms" class="btn btn-info" role="button">Cancel</a>
    {!! Form::close() !!}

@endsection