@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Buat Booking</h1>
    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="room_id">Kamar</label>
            <select class="form-control" id="room_id" name="room_id" required>
                @foreach($rooms as $room)
                <option value="{{ $room->id }}">{{ $room->room_number }} ({{ $room->roomLevel->name }})</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="patient_id">Pasien</label>
            <select class="form-control" id="patient_id" name="patient_id" required>
                @foreach($patients as $patient)
                <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="check_in_date">Tanggal Masuk</label>
            <input type="date" class="form-control" id="check_in_date" name="check_in_date" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

    <h2 class="my-4">Daftar Booking</h2>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Kamar</th>
                <th>Pasien</th>
                <th>Tanggal Masuk</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
            <tr>
                <td>{{ $booking->room->room_number }} ({{ $booking->room->roomLevel->name }})</td>
                <td>{{ $booking->patient->name }}</td>
                <td>{{ $booking->check_in_date }}</td>
                <td>
                    <form action="{{ route('bookings.checkout', $booking->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Checkout</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
