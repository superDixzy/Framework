<?php

namespace App\Http\Controllers;

use App\Models\Bus;

class BusEloquentController extends Controller
{

    // fitur 1 : semua bus
    public function index()
    {
        $bus = Bus::all();

        return view('bus_eloquent.index', compact('bus'));
    }

    // fitur 2 : relasi supir dan rute
    public function relasi()
    {
        $bus = Bus::with(['supir', 'rute'])->get();

        return view('bus_eloquent.relasi', compact('bus'));
    }

    // fitur 3 : bus terbaru
    public function terbaru()
    {
        $bus = Bus::latest()->get();

        return view('bus_eloquent.terbaru', compact('bus'));
    }
}