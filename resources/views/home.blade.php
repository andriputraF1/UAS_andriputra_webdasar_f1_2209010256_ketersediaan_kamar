@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Kamar</h1>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <a href="{{ route('rooms.create') }}" class="btn btn-primary mb-3">Tambah Kamar</a>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Nomor Kamar</th>
                <th>Level Kamar</th>
                <th>Ketersediaan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rooms as $room)
            <tr>
                <td>{{ $room->room_number }}</td>
                <td>{{ $room->roomLevel->name }}</td>
                <td>{{ $room->is_available ? 'Tersedia' : 'Terisi' }}</td>
                <td>
                    @if($room->is_available)
                    <form action="{{ route('bookings.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="room_id" value="{{ $room->id }}">
                        <input type="text" name="patient_name" placeholder="Nama Pasien" required>
                        <input type="hidden" name="check_in" value="{{ now() }}">
                        <button type="submit" class="btn btn-success">Check-in</button>
                    </form>
                    @else
                    <form action="{{ route('bookings.checkout', $room->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Check-out</button>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
