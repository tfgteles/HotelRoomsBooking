@extends('layouts.app')

@section('content')

    {!! Form::open(['url' => 'rooms/'.$room->id, 'method' => 'post']) !!}
        <h3>Delete the room number {{$room->room_number}}?</h3>
        {{Form::hidden('_method', 'delete')}}
        {{Form::submit('Delete', ['class' => 'btn btn-primary'])}}
        <a href="/rooms" class="btn btn-info" role="button">Cancel</a>
    {!! Form::close() !!}

@endsection