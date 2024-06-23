@extends('layouts.app')

@section('content')
<h1>Available Rooms</h1>
<table>
    <thead>
        <tr>
            <th>Room Number</th>
            <th>Level</th>
        </tr>
    </thead>
    <tbody>
        @foreach($availableRooms as $room)
        <tr>
            <td>{{ $room->room_number }}</td>
            <td>{{ $room->roomLevel->name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
