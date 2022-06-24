<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SepatuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sepatu = [
            [
                'brand' => 'Converse',
                'ukuran_id' => '6',
                'warna' => 'Hitam-Putih',
                'harga' => 400000,
            ],
            [
                'brand' => 'Patrobas',
                'ukuran_id' => '3',
                'warna' => 'Merah',
                'harga' => 250000,
            ],
            [
                'brand' => 'Ventela',
                'ukuran_id' => '6',
                'warna' => 'Putih',
                'harga' => 300000,
            ],
        ];
        DB::table('sepatus')->insert($sepatu);
    }
}
