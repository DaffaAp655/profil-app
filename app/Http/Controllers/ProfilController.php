<?php

namespace App\Http\Controllers;

class ProfilController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nama' => 'Daffa Adillah Putra',
            'nim' => '3337250100',
            'prodi' => 'Informatika',
            'angkatan' => 2025,
            'ipk' => 4.00,
            'email' => 'daffaap655@gmail.com',
            'github' => 'github.com/DaffaAp655',
            'skill' => ['HTML', 'CSS', 'JavaScript', 'PHP', 'Laravel', 'Git'],
            'bio' => 'Saya Daffa Adillah Putra, Mahasiswa Informatika UNTIRTA yang semangat belajar.',
        ];

        return view('profil', compact('mahasiswa'));
    }
}
