<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teacherController extends Controller
{
    public function index()
    {
        $title = 'Sistem Sekolah - Daftar Guru';
        $teachers = [
            [
                'id' => 1,
                'nip' => '198501012024',
                'name' => 'Ahmad Fauzi',
                'gender' => 'Laki-Laki',
                'subject' => 'Akuntansi Dasar',
                'phone' => '081234560001',
                'status' => 'Aktif',
            ],
            [
                'id' => 2,
                'nip' => '198703152024',
                'name' => 'covid-19',
                'gender' => 'Perempuan',
                'subject' => 'Jaringan Komputer',
                'phone' => '081234560002',
                'status' => 'Aktif',
            ]
        ];

        return view('teachers.index', [
            'title' => $title,
            'teachers' => $teachers
        ]);
    }


    public function create()
    {
        $title = 'Sistem Sekolah - Tambah Guru';
        return view('teachers.create', [
            'title' => $title
        ]);
    }

    public function show($id)
    {
        $title = 'Sistem Sekolah - Detail Guru';
        return view('teachers.show', [
            'title' => $title
        ]);
    }


        public function edit($id)
    {
        $title = 'Sistem Sekolah - Edit Guru';
        return view('teachers.edit', [
            'title' => $title
        ]);
    }

    public function store(Request $request)
    {
        // Logika untuk menyimpan data Guru baru
        return "Melakukan penambahan data Guru";
    }



    public function update(Request $request, $id)
    {
        // Logika untuk memperbarui data Guru
        return "Melakukan perubahan data Guru";
    }

    public function destroy($id)
    {
        // Logika untuk menghapus data Guru
        return "Menghapus data Guru";
    }

}
