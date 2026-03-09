<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class BusQueryController extends Controller
{

    // fitur 1 : tampil semua bus
    public function index()
    {
        $bus = DB::table('buses')->get();

        return view('bus_query.index', compact('bus'));
    }

    // fitur 2 : bus yang aktif
    public function busAktif()
    {
        $bus = DB::table('buses')
            ->where('status', 'aktif')
            ->get();

        return view('bus_query.aktif', compact('bus'));
    }

    // fitur 3 : join dengan rute
    public function busKota()
    {
        $bus = DB::table('buses')
            ->join('rutes', 'buses.rute_id', '=', 'rutes.id')
            ->select('buses.*', 'rutes.kota_asal', 'rutes.kota_tujuan')
            ->get();

        return view('bus_query.kota', compact('bus'));
    }
}