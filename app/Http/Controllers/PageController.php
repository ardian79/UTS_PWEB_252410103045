<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $request->validate([
            'username' => 'required'
        ]);

        return redirect('/dashboard?username=' . urlencode($request->username));
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Mahasiswa');
        
        $statistik = [
            ['label' => 'Total Tugas', 'nilai' => 12],
            ['label' => 'Selesai', 'nilai' => 4],
            ['label' => 'Proses', 'nilai' => 3],
            ['label' => 'Belum', 'nilai' => 5],
        ];

        $tugasTerdekat = [
            ['matkul' => 'Pemrograman Berbasis Website', 'jenis' => 'Teori', 'judul' => 'UTS Laravel MVC', 'deadline' => '10 Nov 2026', 'prioritas' => 'Tinggi'],
            ['matkul' => 'Pemrograman Berorientasi Obyek', 'jenis' => 'Praktikum', 'judul' => 'Tugas 3 - Polymorphism', 'deadline' => '12 Nov 2026', 'prioritas' => 'Sedang'],
            ['matkul' => 'Kecerdasan Buatan', 'jenis' => 'Teori', 'judul' => 'Makalah Algoritma Genetika', 'deadline' => '14 Nov 2026', 'prioritas' => 'Rendah'],
        ];

        $tugasTerdekat = collect($tugasTerdekat)->sortBy(function($item) {
            return strtotime($item['deadline']);
        })->values()->all();

        return view('dashboard', compact('username', 'statistik', 'tugasTerdekat'));
    }

    public function pengelolaan()
    {
        $tugas = [
            ['matkul' => 'Pemrograman Berbasis Website', 'jenis' => 'Teori', 'judul' => 'UTS Implementasi MVC', 'deadline' => '10 Nov 2026', 'prioritas' => 'Tinggi', 'status' => 'Proses'],
            ['matkul' => 'Pemrograman Berbasis Website', 'jenis' => 'Praktikum', 'judul' => 'Tugas 2 - Slicing UI', 'deadline' => '11 Nov 2026', 'prioritas' => 'Sedang', 'status' => 'Belum'],
            ['matkul' => 'Pemrograman Berorientasi Obyek', 'jenis' => 'Teori', 'judul' => 'Kuis Konsep Inheritance', 'deadline' => '09 Nov 2026', 'prioritas' => 'Tinggi', 'status' => 'Selesai'],
            ['matkul' => 'Pemrograman Berorientasi Obyek', 'jenis' => 'Praktikum', 'judul' => 'Tugas 3 - Polymorphism', 'deadline' => '12 Nov 2026', 'prioritas' => 'Sedang', 'status' => 'Proses'],
            ['matkul' => 'Analisa dan Desain Perangkat Lunak', 'jenis' => 'Teori', 'judul' => 'Laporan Use Case Diagram', 'deadline' => '15 Nov 2026', 'prioritas' => 'Tinggi', 'status' => 'Belum'],
            ['matkul' => 'Analisa dan Desain Perangkat Lunak', 'jenis' => 'Praktikum', 'judul' => 'Tugas 2 - ERD', 'deadline' => '13 Nov 2026', 'prioritas' => 'Sedang', 'status' => 'Proses'],
            ['matkul' => 'Grafika Komputer', 'jenis' => 'Teori', 'judul' => 'Tugas Transformasi 2D', 'deadline' => '16 Nov 2026', 'prioritas' => 'Rendah', 'status' => 'Belum'],
            ['matkul' => 'Grafika Komputer', 'jenis' => 'Praktikum', 'judul' => 'Modul 4 - OpenGL', 'deadline' => '14 Nov 2026', 'prioritas' => 'Tinggi', 'status' => 'Proses'],
            ['matkul' => 'Kecerdasan Buatan', 'jenis' => 'Teori', 'judul' => 'Makalah Algoritma Genetika', 'deadline' => '20 Nov 2026', 'prioritas' => 'Sedang', 'status' => 'Belum'],
            ['matkul' => 'Kecerdasan Buatan', 'jenis' => 'Praktikum', 'judul' => 'Tugas 2 - Regresi Linear', 'deadline' => '18 Nov 2026', 'prioritas' => 'Rendah', 'status' => 'Selesai'],
            ['matkul' => 'Manajemen Keamanan Sistem Informasi', 'jenis' => 'Teori', 'judul' => 'Analisis Risiko Keamanan', 'deadline' => '22 Nov 2026', 'prioritas' => 'Sedang', 'status' => 'Belum'],
            ['matkul' => 'Pemrograman Fungsional', 'jenis' => 'Teori', 'judul' => 'Tugas Haskell Basics', 'deadline' => '08 Nov 2026', 'prioritas' => 'Tinggi', 'status' => 'Selesai'],
        ];

        $tugas = collect($tugas)->sortBy(function($item) {
            return strtotime($item['deadline']);
        })->values()->all();
        return view('pengelolaan', compact('tugas'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Mahasiswa');
        
        $emailBersih = strtolower(str_replace(' ', '', $username));

        $profil = [
            'nama' => ucfirst($username),
            'nim' => '252410103045',
            'prodi' => 'Informatika',
            'angkatan' => '2025',
            'email' => $emailBersih . '@unej.ac.id',
        ];

        return view('profile', compact('username', 'profil'));
    }

    public function logout()
    {
        return redirect('/');
    }
}