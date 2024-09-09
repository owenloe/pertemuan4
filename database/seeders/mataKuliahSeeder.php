<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class mataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mata_kuliahs')->insert([
            'kodeMataKuliah' => 'SYS00001',
            'namaMataKuliah' => 'Pemrograman Aplikasi Bisnis',
            'sks' => 4,
        ]);

        DB::table('mata_kuliahs')->insert([
            'kodeMataKuliah' => 'SYS00002',
            'namaMataKuliah' => 'Audit dan Kontrol Sistem Informasi',
            'sks' => 4,
        ]);

        DB::table('mata_kuliahs')->insert([
            'kodeMataKuliah' => 'SYS00003',
            'namaMataKuliah' => 'Pemrograman Web',
            'sks' => 4,
        ]);

        DB::table('mata_kuliahs')->insert([
            'kodeMataKuliah' => 'SYS00004',
            'namaMataKuliah' => 'Sistem Basis Data',
            'sks' => 4,
        ]);
    }
}
