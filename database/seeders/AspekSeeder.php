<?php

namespace Database\Seeders;

use App\Models\Aspek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AspekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aspek = [
            ['kode_aspek' => 'ASK01', 'aspek_name' => 'Kuota Bimbingan', 'persentase' => '45', 'keterangan' => 'Aspek Kuota Bimbingan mengukur jumlah maksimum bimbingan oleh seorang dosen pada satu periode tertentu.'],
            ['kode_aspek' => 'ASK02', 'aspek_name' => 'Bidang Keahlian', 'persentase' => '35', 'keterangan' => 'Aspek Bidang Keahlian mengukur kesesuaian antara topik skripsi mahasiswa dengan bidang keahlian dosen.'],
            ['kode_aspek' => 'ASK03', 'aspek_name' => 'Riset Penelitian', 'persentase' => '20', 'keterangan' => 'Aspek Riset Penelitian mengukur pengalaman dosen dalam kegiatan riset dan penelitian yang relevan dengan topik skripsi mahasiswa.'],
        ];

        foreach ($aspek as $a) {
            Aspek::create([
                'kode_aspek' => $a['kode_aspek'],
                'aspek_name' => $a['aspek_name'],
                'persentase' => $a['persentase'],
                'keterangan' => $a['keterangan']
            ]);
        }
    }
}