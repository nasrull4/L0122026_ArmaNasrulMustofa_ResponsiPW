<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pegawai;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat data dummy untuk pegawai
        Pegawai::create([
            'nama' => 'Jono',
            'jabatan' => 'Manager'
        ]);

        // Tambahkan lebih banyak data di sini jika diperlukan
    }
}
