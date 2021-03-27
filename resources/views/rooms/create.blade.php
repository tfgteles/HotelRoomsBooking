@extends('layouts.app')

@section('content')

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
        <a href="/rooms" class="btn btn-info" role="button">Cancel</a>
    {!! Form::close() !!}

@endsection