<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $title = 'Sistem Sekolah - Daftar Siswa';
        $students = [
            [
                'id' => 1,
                'nis' => '2024001',
                'name' => 'digga',
                'class' => 'XII TKJ 3',
                'major' => 'TKJ'


            ],

            [
                'id' => 2,
                'nis' => '2024002',
                'name' => 'Rizky',
                'class' => 'XII AKL',
                'major' => 'AKL'
            ]
        ];

        return view('students.index', [
            'title' => $title,
            'students' => $students
        ]);
    }

    public function show($id)
    {
        $title = 'Sistem Sekolah - Detail Siswa';
        return view('students.show', [
            'title' => $title
        ]);
    }

    public function create()
    {
        $title = 'Sistem Sekolah - Tambah Siswa';
        return view('students.create', [
            'title' => $title
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => ['required', 'string', 'size:4', 'unique:students,nis'],
            'name' => ['required', 'string'],
            'gender' => ['required', 'string', 'in:Laki-laki,Perempuan'],
            'major' => ['required', 'string', 'in:AKL,TKJ,BiD'],
            'class' => ['required', 'string']
        ]);

        $student = new Student();
        $student->nis = $request->nis;
        $student->name = $request->name;
        $student->gender = $request->gender;
        $student->major = $request->major;
        $student->class = $request->class;
        $student->save();

        return redirect()->route('students.index');
    }

    public function edit($id)
    {
        $title = 'Sistem Sekolah - Edit Siswa';
        return view('students.edit', [
            'title' => $title
        ]);
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
