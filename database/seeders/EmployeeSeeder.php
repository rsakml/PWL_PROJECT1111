<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee')->insert([
            [
                'gambar' => 'charlie_puth.jpg',
                'nama' => 'Charlie Puth',
                'jenisKelamin' => '0',
                'jabatan' => 'Customer Service',
                'nohp' => '088167563456'
            ],
            [
                'gambar' => 'boy_william.jpg',
                'nama' => 'Boy William',
                'jenisKelamin' => '0',
                'jabatan' => 'Customer Service',
                'nohp' => '088167563457'
            ],
            [
                'gambar' => 'prilly.jpg',
                'nama' => 'Prilly L',
                'jenisKelamin' => '1',
                'jabatan' => 'Bagian Keuangan',
                'nohp' => '088167563411'
            ],
            [
                'gambar' => 'citra.jpg',
                'nama' => 'Citra K',
                'jenisKelamin' => '1',
                'jabatan' => 'Bagian Keuangan',
                'nohp' => '085814523455'
            ],
            [
                'gambar' => 'ihsan.jpg',
                'nama' => 'Ihsan T',
                'jenisKelamin' => '0',
                'jabatan' => 'Bagian Produksi',
                'nohp' => '086741323321'
            ],
            [
                'gambar' => 'dion_wiyoko.jpg',
                'nama' => 'Dion W',
                'jenisKelamin' => '0',
                'jabatan' => 'Manajer',
                'nohp' => '088167563123'
            ]

        ]);
    }
}
