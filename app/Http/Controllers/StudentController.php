<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return "This is the page to list all students";
    }

    public function show($id)
    {
        return "This is the page to show a student with id: {$id}";
    }

    public function create()
    {
        return "This is the page to create a new student";
    }

    public function store(Request $request)
    {
        // Logika untuk menyimpan data siswa baru
        return "Student has been added";
    }   

    public function edit($id)
    {
        return "This is the page to edit a student with id: {$id}";
    }

    public function update(Request $request, $id)
    {
        // Logika untuk memperbarui data siswa
        return "Student with id: {$id} has been updated";
    }

    public function destroy($id)
    {
        // Logika untuk menghapus data siswa
        return "Student with id: {$id} has been deleted";
    }

}
