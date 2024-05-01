<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang')->insert([
            [
                'kode_barang' => 'PRD0001',
                'nama_barang' => 'Pensil',
                'harga_barang' => 2000,
                'desc_barang' => "Pensil yang bagus untuk menulis",
                'satuan_id' => 1
            ],
            [
                'kode_barang' => 'PRD0002',
                'nama_barang' => 'Beras Raja Lele',
                'harga_barang' => 35000,
                'desc_barang' => "Beras yang sehat dan bergizi",
                'satuan_id' => 2
            ],
            [
                'kode_barang' => 'PRD0003',
                'nama_barang' => 'Aqua 250ml',
                'harga_barang' => 23000,
                'desc_barang' => "Minuman Mineral yang segar",
                'satuan_id' => 3
            ],
        ]);
    }
}
