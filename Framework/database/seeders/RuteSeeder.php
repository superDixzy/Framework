<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuteSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('rutes')->insert([
            [
                'kota_asal' => 'Surabaya',
                'kota_tujuan' => 'Malang'
            ],
            [
                'kota_asal' => 'Surabaya',
                'kota_tujuan' => 'Jakarta'
            ],
            [
                'kota_asal' => 'Malang',
                'kota_tujuan' => 'Yogyakarta'
            ]
        ]);
    }
}