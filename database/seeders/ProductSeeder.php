<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            [
                'id_product' => '1',
                'foto' => 'kursi.jpg',
                'nama_product' => 'Kursi',
                'merk' => 'Olympic',
                'harga_beli' => '90000',
                'harga_jual' => '100000',
                'stok' => '5'

            ]
        ]);
    }
}
