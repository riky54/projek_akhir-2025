<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProgramStudi;

class ProgramStudiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProgramStudi::create([
            'nama' => 'Teknik Informatika',
            'kode' => 'TI',
            'fakultas_id' => 1, // pastikan ada fakultas dengan id 1
            'kaprodi' => 'Ir. Joko Widodo',
        ]);

        ProgramStudi::create([
            'nama' => 'Manajemen',
            'kode' => 'MNJ',
            'fakultas_id' => 2, // pastikan ada fakultas dengan id 2
            'kaprodi' => 'Dr. Ani Kusuma',
        ]);
    }
}
