<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index()
    {
        $title = 'Sistem Sekolah - Daftar Jurusan';
        $majors = [
        [
            'id' => 1,
            'code' => 'AKL',
            'name' => 'Akuntansi dan Keuangan Lembaga',
            'description' => 'Program keahlian yang membekali murid dengan kompetensi pencatatan dan pelaporan keuangan.',
        ],
        [
            'id' => 2,
            'code' => 'TKJ',
            'name' => 'Teknik Komputer dan Jaringan',
            'description' => 'Program keahlian yang membekali murid dengan kompetensi instalasi, konfigurasi, dan pemeliharaan jaringan komputer.',
        ],
        [
            'id' => 3,
            'code' => 'BD',
            'name' => 'Bisnis Digital',
            'description' => 'Program keahlian yang membekali murid dengan kompetensi pemasaran dan pengelolaan bisnis berbasis digital.',
        ],
];


        return view('majors.index', [
            'title' => $title,
            'majors' => $majors
        ]);
    }

    public function show($id)
    {
        $title = 'Sistem Sekolah - Detail Jurusan';
        return view('majors.show', [
            'title' => $title
        ]);
    }

    public function create()
    {
        $title = 'Sistem Sekolah - Tambah Jurusan';
        return view('majors.create', [
            'title' => $title
        ]);
    }

    public function store(Request $request)
    {
        // Logika untuk menyimpan data Jurusan baru
        return "Melakukan penambahan data Jurusan";
    }

    public function edit($id)
    {
        $title = 'Sistem Sekolah - Edit Jurusan';
        return view('majors.edit', [
            'title' => $title
        ]);
    }

    public function update(Request $request, $id)
    {
        // Logika untuk memperbarui data Jurusan
        return "Melakukan perubahan data Jurusan";
    }

    public function destroy($id)
    {
        // Logika untuk menghapus data Jurusan
        return "Menghapus data Jurusan";
    }

}
