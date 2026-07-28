<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return "Menampilkan halaman daftar guru";
    }

    public function show($id)
    {
        return "Menampilkan guru dengan ID: {$id}";
    }

    public function create()
    {
        return "Menampilkan halaman tambah guru";
    }

    public function store(Request $request)
    {
        // Logika untuk menyimpan data guru baru
        return "Melakukan penambahan data guru";
    }   

    public function edit($id)
    {
        return "Menampilkan halaman edit guru";
    }

    public function update(Request $request, $id)
    {
        // Logika untuk memperbarui data guru
        return "Melakukan perubahan data guru";
    }

    public function destroy($id)
    {
        // Logika untuk menghapus data guru
        return "Menghapus data guru";
    }
}
