<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplier')->insert([
            [
                'gambar' => '1.jpg',
                'nama' => 'iFurn Holic',
                'kategori' => 'Perabotan yang dijual toko furniture lokal ini bergaya minimalis modern',
                'email' => 'ifurnholic@gmail.com'
            ],
            [
                'gambar' => '2.jpg',
                'nama' => 'Fabelio',
                'kategori' => 'Furniture khusus ruang tamu, furnite khusus kamar tidur, ruang makan, hingga ruang kerja',
                'email' => 'fabelio@gmail.com'
            ],
            [
                'gambar' => '3.jpg',
                'nama' => 'Dekoruma',
                'kategori' => 'Furniture lokal berupa peralatan meja kantor, furniture rumah',
                'email' => 'dekoruma@gmail.com'
            ],
            [
                'gambar' => '4.jpg',
                'nama' => 'Vivere',
                'kategori' => 'Furniture lokal untuk melengkapi dekorasi rumah.',
                'email' => 'vivere@gmail.com'
            ],
            [
                'gambar' => '5.jpg',
                'nama' => 'Mendakor',
                'kategori' => 'Furniture unik bergaya estetik',
                'email' => 'mendakor@gmail.com'
            ],
            [
                'gambar' => '6.jpg',
                'nama' => 'Andoleto',
                'kategori' => 'Furniture unik bergaya modern',
                'email' => 'andoleto@gmail.com'
            ],
            [
                'gambar' => '7.jpg',
                'nama' => 'NAGAREY',
                'kategori' => 'Furniture beragam karya buatan tangan pengrajin Indonesia',
                'email' => 'NAGAREY@gmail.com'
            ]

        ]);
    }
}
