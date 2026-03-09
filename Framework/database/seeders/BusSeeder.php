<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('buses')->insert([

            [
                'nama_bus' => 'Sinar Jaya',
                'plat_nomor' => 'B 1234 SJ',
                'kapasitas' => 40,
                'status' => 'aktif',
                'supir_id' => 1,
                'rute_id' => 1
            ],

            [
                'nama_bus' => 'Rosalia Indah',
                'plat_nomor' => 'B 4321 RI',
                'kapasitas' => 45,
                'status' => 'aktif',
                'supir_id' => 2,
                'rute_id' => 2
            ],

            [
                'nama_bus' => 'Harapan Jaya',
                'plat_nomor' => 'N 9876 HJ',
                'kapasitas' => 38,
                'status' => 'nonaktif',
                'supir_id' => 3,
                'rute_id' => 3
            ],

            [
                'nama_bus' => 'Mira',
                'plat_nomor' => 'L 7654 MR',
                'kapasitas' => 42,
                'status' => 'aktif',
                'supir_id' => 1,
                'rute_id' => 2
            ],

        ]);
    }
}