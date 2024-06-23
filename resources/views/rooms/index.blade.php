@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Rooms</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Room Number</th>
                <th>Level</th>
                <th>Availability</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rooms as $room)
            <tr>
                <td>{{ $room->room_number }}</td>
                <td>{{ $room->roomLevel->name }}</td>
                <td>{{ $room->is_available ? 'Available' : 'Occupied' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
