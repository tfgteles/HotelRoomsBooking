{{-- StAuth10065: I Tiago Franco de Goes Teles, 000786450 certify that this material is my original work. No other person's work has been used without due acknowledgement. I have not made my work available to anyone else. --}}

@extends('layouts.app')

@section('content')

    {!! Form::open(['url' => 'bookings', 'method' => 'post']) !!}
        <div class="form-group">
            {{Form::label('room_number', 'Room number')}}
            {{Form::text('room_number', '', ['class' => 'form-control', 'placeholder' => 'Room number'])}}
        </div>
        <div class="form-group">
            {{Form::label('guest_name', 'Guest Name')}}
            {{Form::text('guest_name', '', ['class' => 'form-control', 'placeholder' => 'Room description'])}}
        </div>
        <div class="form-group">
            {{Form::label('booking_date', 'Date')}}
            {{Form::date('booking_date', '', ['class' => 'form-control'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        <a href="/bookings" class="btn btn-info" role="button">Clear</a>
    {!! Form::close() !!}

    @if (count($bookings) > 0)
        <table class="table table-striped mt-3">
            <tr>
                <th>Room Number</th>
                <th>Room Name</th>
                <th>Guest Name</th>
                <th>Date</th>
                <th>Delete</th>
            </tr>
        @foreach ($bookings as $booking)
            <tr>
                <td>{{$booking->room->room_number}}</td>
                <td>{{$booking->room->room_name}}</td>
                <td>{{$booking->guest_name}}</td>
                <td>{{$booking->booking_date}}</td>
                <td>
                    {!! Form::open(['url' => 'bookings/'.$booking->id, 'method' => 'post']) !!}
                        {{Form::hidden('_method', 'delete')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-primary'])}}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </table>

    @else
        <p class="mt-3"> No booking found</p>
    @endif

@endsection