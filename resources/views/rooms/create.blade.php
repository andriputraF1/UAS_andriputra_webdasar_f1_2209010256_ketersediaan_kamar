@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Data Kamar</h1>
    <form action="{{ route('rooms.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="room_number">Nomor Kamar</label>
            <input type="text" class="form-control" id="room_number" name="room_number" required>
        </div>
        <div class="form-group">
            <label for="room_level_id">Level Kamar</label>
            <select class="form-control" id="room_level_id" name="room_level_id" required>
                @foreach($roomLevels as $level)
                <option value="{{ $level->id }}">{{ $level->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
