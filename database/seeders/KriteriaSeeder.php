<?php

namespace Database\Seeders;

use App\Models\Kriteria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kriteria = [
            ['nama' => 'Durability', 'keterangan' => 'Daya Tahan'],
            ['nama' => 'Offense', 'keterangan' => 'Kekuatan Serangan'],
            ['nama' => 'Control Effect', 'keterangan' => 'Efek Penghenti Gerakan'],
            ['nama' => 'Movement Speed', 'keterangan' => 'Kecepatan Rotasi'],
        ];

        foreach ($kriteria as $k) {
            Kriteria::create([
                'nama' => $k['nama'],
                'keterangan' => $k['keterangan']
            ]);
        }
    }
}