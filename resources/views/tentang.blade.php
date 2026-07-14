@extends('layouts.app')
@section('title', 'Tentang Mata Kuliah')
@section('content')

<!-- Header Card -->
<div style="background: white; border: 1px solid #e2e8f0; border-radius: 8px; padding: 24px; margin-bottom: 20px;">
    <h1 style="color: #0B1F3A; font-size: 24px; margin-bottom: 8px;">{{ $info['matakuliah'] }}</h1>
    <p style="color: #666; font-size: 14px; margin-bottom: 16px;">
        Semester: {{ $info['semester'] }} | Dosen: <strong>{{ $info['dosen'] }}</strong>
    </p>
    
    <div style="display: flex; gap: 20px; font-size: 13px; color: #555; border-top: 1px solid #edf2f7; padding-top: 12px; justify-content: space-between;">
        <div>🏫 Ruang: Lab Komputer 3</div>
        <div>⏰ Jadwal: {{ $info['jadwal'] ?? '-' }}</div>
        <div>🎓 Bobot: 3 SKS</div>
    </div>
</div>

<!-- Deskripsi Section -->
<div style="background: white; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; margin-bottom: 20px;">
    <h3 style="color: #0B1F3A; font-size: 16px; margin-bottom: 8px;">Deskripsi Mata Kuliah</h3>
    <p style="color: #555; font-size: 14px; line-height: 1.5; margin: 0;">
        Mata kuliah ini dirancang untuk membekali mahasiswa dengan pemahaman mendalam tentang pengembangan aplikasi web modern. Fokus pembelajaran mencakup konsep arsitektur client-side dan server-side, pemrograman database dinamis, pengenalan MVC menggunakan framework Laravel, serta prinsip-prinsip perancangan antarmuka web yang responsif, estetis, dan aman.
    </p>
</div>

<!-- Topik Pembelajaran Section -->
<div style="background: white; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; margin-bottom: 20px;">
    <h3 style="color: #0B1F3A; font-size: 16px; margin-bottom: 12px;">Topik Pembelajaran Utama</h3>
    <ul style="color: #555; font-size: 14px; line-height: 1.6; padding-left: 20px; margin: 0;">
        <li style="margin-bottom: 8px;">
            <strong>Web Foundations & Styling:</strong> HTML5 semantic elements, CSS3 Flexbox/Grid, responsive web design.
        </li>
        <li style="margin-bottom: 8px;">
            <strong>PHP Native & MVC Concept:</strong> OOP PHP, form requests, sessions, dan konsep MVC.
        </li>
        <li style="margin-bottom: 0;">
            <strong>Laravel Framework Core:</strong> Routing, Controller, Blade, Migrations, Seeders, Query Builder, dan Eloquent ORM.
        </li>
    </ul>
</div>

<!-- Penilaian & Tautan Penting -->
<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
    
    <!-- Komponen Penilaian -->
    <div style="background: white; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px;">
        <h3 style="color: #0B1F3A; font-size: 16px; margin-bottom: 12px; border-bottom: 1px solid #edf2f7; padding-bottom: 8px;">Komponen Evaluasi</h3>
        <ul style="list-style: none; padding: 0; margin: 0; font-size: 13px; color: #555; line-height: 1.8;">
            <li style="display: flex; justify-content: space-between;"><span>Tugas & Keaktifan</span><strong>30%</strong></li>
            <li style="display: flex; justify-content: space-between;"><span>Ujian Tengah Semester (UTS)</span><strong>30%</strong></li>
            <li style="display: flex; justify-content: space-between;"><span>Ujian Akhir Semester (UAS)</span><strong>40%</strong></li>
        </ul>
    </div>
    
    <!-- Tautan Penting -->
    <div style="background: white; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px;">
        <h3 style="color: #0B1F3A; font-size: 16px; margin-bottom: 12px; border-bottom: 1px solid #edf2f7; padding-bottom: 8px;">Tautan Akademik</h3>
        <div style="display: flex; flex-direction: column; gap: 8px; font-size: 13px;">
            <a href="https://spada.untirta.ac.id" target="_blank" style="color: #065A82; text-decoration: none;">🌐 SPADA Untirta Online Learning</a>
            <a href="https://github.com" target="_blank" style="color: #065A82; text-decoration: none;">🐱 GitHub Repository Tugas</a>
            <a href="mailto:royan@untirta.ac.id" style="color: #065A82; text-decoration: none;">📧 Hubungi Dosen (Email)</a>
        </div>
    </div>

</div>

@endsection