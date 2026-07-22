<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return "Ini adalah halaman daftar siswa";
    }

    public function show($id)
    {
        return "Menampilkan detail siswa dengan id: {$id}";
    }

}
