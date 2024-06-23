<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomLevel;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    // Method untuk menampilkan halaman utama dengan daftar kamar
    public function index()
    {
        $rooms = Room::with('roomLevel')->get();
        $roomLevels = RoomLevel::all();
        return view('home', compact('rooms', 'roomLevels'));
    }

    // Method untuk menampilkan form pembuatan kamar baru
    public function create()
    {
        $roomLevels = RoomLevel::all();
        return view('rooms.create', compact('roomLevels'));
    }

    // Method untuk menyimpan data kamar baru ke dalam database
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'room_number' => 'required|string|max:255',
            'room_level_id' => 'required|exists:room_levels,id',
        ]);

        // Membuat dan menyimpan room baru
        Room::create([
            'room_number' => $validated['room_number'],
            'room_level_id' => $validated['room_level_id'],
            'is_available' => true,
        ]);

        // Redirect ke halaman utama dengan pesan sukses
        return redirect()->route('home')->with('success', 'Data kamar berhasil disimpan.');
    }
}
