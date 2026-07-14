<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;

class ProfilController extends Controller
{
    public function index()
    {
        // Menggunakan nama variabel $mahasiswas (jamak)
        $mahasiswas = Mahasiswa::orderBy('ipk', 'desc')->get();

        // Mengirim ke view dengan nama 'mahasiswas'
        return view('profil', compact('mahasiswas'));
    }

    public function show($id)
    {
        // Menggunakan $mahasiswa (tunggal)
        $mahasiswa = Mahasiswa::findOrFail($id);

        return view('profil-detail', compact('mahasiswa'));
    }
}