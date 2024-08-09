<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('customer', 'room')->get();
        return view('backend.booking', compact('bookings'));
    }
}
