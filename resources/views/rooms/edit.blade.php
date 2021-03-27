@extends('layouts.app')

@section('content')

    {!! Form::open(['url' => 'rooms/'.$room->id, 'method' => 'post']) !!}

        <div class="form-group">
            {{Form::label('room_description', 'Room description')}}
            {{Form::textarea('room_description', $room->room_description, ['class' => 'form-control', 'placeholder' => 'Room description'])}}
        </div>

        {{Form::hidden('_method', 'put')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    <div class="mt-3">
        <a href="/rooms" class="btn btn-info" role="button">Cancel</a>
    </div>

@endsection