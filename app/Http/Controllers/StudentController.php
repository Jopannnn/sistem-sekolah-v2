<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return "Menampilkan halaman daftar siswa";
    }

    public function show($id)
    {
        return "Menampilkan siswa dengan ID: {$id}";
    }

    public function create()
    {
        return "Menampilkan halaman tambah siswa";
    }

    public function store(Request $request)
    {
        // Logika untuk menyimpan data siswa baru
        return "Melakukan penambahan data siswa";
    }   

    public function edit($id)
    {
        return "Menampilkan halaman edit siswa";
    }

    public function update(Request $request, $id)
    {
        // Logika untuk memperbarui data siswa
        return "Melakukan perubahan data siswa";
    }

    public function destroy($id)
    {
        // Logika untuk menghapus data siswa
        return "Menghapus data siswa";
    }

}
