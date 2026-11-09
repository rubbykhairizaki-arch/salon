<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'service_name' => 'required|string',
            'booking_date' => 'required|date',
            'booking_time' => 'required',
            'notes' => 'nullable|string',
        ]);

        Booking::create($validated);

        return redirect()->back()->with('success', 'Reservasi Anda berhasil dikirim! Tim kami akan segera mengonfirmasi jadwal Anda melalui WhatsApp atau Email.');
    }
}