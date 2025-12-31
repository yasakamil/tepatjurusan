<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        // 1. Ambil Event yang BELUM lewat (Upcoming)
        // Diurutkan dari yang paling dekat tanggalnya (ASC)
        $upcomingEvents = Event::where('start_datetime', '>=', now())
                            ->orderBy('start_datetime', 'asc')
                            ->paginate(9); // Paginasi cuma buat upcoming

        // 2. Ambil Event yang SUDAH lewat (Past)
        // Diurutkan dari yang baru aja selesai (DESC)
        // Kita ambil 6 aja biar ga kebanyakan, kalo mau semua ganti ->get()
        $pastEvents = Event::where('start_datetime', '<', now())
                        ->orderBy('start_datetime', 'desc')
                        ->take(6) 
                        ->get();
        
        return view('events.index', compact('upcomingEvents', 'pastEvents'));
    }

    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }
}