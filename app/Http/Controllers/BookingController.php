<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use App\Models\Patient;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('bookings.index', compact('bookings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_id' => 'required|integer',
            'patient_name' => 'required|string|max:255',
            'check_in' => 'required|date',
        ]);

        $booking = new Booking([
            'room_id' => $request->room_id,
            'patient_name' => $request->patient_name,
            'check_in' => $request->check_in,
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        $booking->save();

        return redirect()->route('bookings.index')->with('success', 'Booking berhasil ditambahkan');
}


    public function checkout($id)
    {
        $booking = Booking::find($id);
        $room = Room::find($booking->room_id);

        // Update status kamar menjadi tersedia
        $room->is_available = true;
        $room->save();

        // Hapus booking
        $booking->delete();

        return redirect()->route('home')->with('success', 'Pasien telah checkout dan kamar tersedia kembali.');
    }
}