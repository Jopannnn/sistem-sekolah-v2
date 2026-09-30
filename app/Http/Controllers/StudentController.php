<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $title = 'Sistem Sekolah - Daftar Siswa';

        $students = Student::all();
        
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
        $validatedRequest = $request->validate([
            'nis' => ['required', 'string', 'size:4', 'unique:students,nis'],
            'name' => ['required', 'string'],
            'gender' => ['required', 'string', 'in:Laki-laki,Perempuan'],
            'major' => ['required', 'string', 'in:AKL,TKJ,BiD'],
            'class' => ['required', 'string']
        ]);

        //Tambahkan ke database
        Student::create($validatedRequest);

        //handle if success
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
