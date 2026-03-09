<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupirSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('supirs')->insert([
            [
                'nama_supir' => 'Budi Santoso',
                'no_hp' => '081234567890'
            ],
            [
                'nama_supir' => 'Andi Wijaya',
                'no_hp' => '081345678901'
            ],
            [
                'nama_supir' => 'Rudi Hartono',
                'no_hp' => '081456789012'
            ]
        ]);
    }
}