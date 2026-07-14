<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus data lama agar tidak duplikat saat seed ulang [cite: 54]
        Mahasiswa::truncate();

        $data = [
            ['nama' => 'Budi Santoso', 'nim' => '3411221001', 'ipk' => 3.85, 'prodi' => 'Informatika', 'angkatan' => 2022, 'email' => 'budi@example.com', 'github' => 'github.com/budi', 'bio' => 'Mahasiswa aktif yang gemar web development.'],
            ['nama' => 'Ani Rahayu', 'nim' => '3411221002', 'ipk' => 3.72, 'prodi' => 'Informatika', 'angkatan' => 2022, 'email' => 'ani@example.com', 'github' => 'github.com/ani', 'bio' => 'Tertarik di bidang UI/UX dan frontend.'],
            ['nama' => 'Citra Dewi', 'nim' => '3411221003', 'ipk' => 3.91, 'prodi' => 'Informatika', 'angkatan' => 2022, 'email' => 'citra@example.com', 'github' => 'github.com/citra', 'bio' => 'Passionate tentang machine learning dan data science.'],
            ['nama' => 'Dodi Pratama', 'nim' => '3411221004', 'ipk' => 3.45, 'prodi' => 'Informatika', 'angkatan' => 2022, 'email' => 'dodi@example.com', 'github' => 'github.com/dodi', 'bio' => 'Suka pengembangan aplikasi mobile dan IoT.'],
            ['nama' => 'Eka Wulandari', 'nim' => '3411221005', 'ipk' => 3.68, 'prodi' => 'Informatika', 'angkatan' => 2022, 'email' => 'eka@example.com', 'github' => 'github.com/eka', 'bio' => 'Fokus di bidang cybersecurity dan jaringan komputer.'],
            ['nama' => 'Fajar Ramadhan', 'nim' => '3411221006', 'ipk' => 3.79, 'prodi' => 'Informatika', 'angkatan' => 2022, 'email' => 'fajar@example.com', 'github' => 'github.com/fajar', 'bio' => 'Tertarik pada sistem terdistribusi dan backend development.'],
            ['nama' => 'Gita Lestari', 'nim' => '3411221007', 'ipk' => 3.52, 'prodi' => 'Informatika', 'angkatan' => 2022, 'email' => 'gita@example.com', 'github' => 'github.com/gita', 'bio' => 'Menggemari data analysis dan visualisasi data.'],
            ['nama' => 'Hendra Wijaya', 'nim' => '3411221008', 'ipk' => 3.88, 'prodi' => 'Informatika', 'angkatan' => 2022, 'email' => 'hendra@example.com', 'github' => 'github.com/hendra', 'bio' => 'Fokus pada cloud computing dan arsitektur microservices.'],
            ['nama' => 'Indah Permata', 'nim' => '3411221009', 'ipk' => 3.60, 'prodi' => 'Informatika', 'angkatan' => 2022, 'email' => 'indah@example.com', 'github' => 'github.com/indah', 'bio' => 'Suka mendesain antarmuka pengguna (UI) dan riset UX.'],
            ['nama' => 'Joko Susilo', 'nim' => '3411221010', 'ipk' => 3.95, 'prodi' => 'Informatika', 'angkatan' => 2022, 'email' => 'joko@example.com', 'github' => 'github.com/joko', 'bio' => 'Peneliti AI pemula dan aktif di komunitas open-source.'],
        ];

        foreach ($data as $mhs) {
            Mahasiswa::create($mhs); // [cite: 59]
        }
    }
}