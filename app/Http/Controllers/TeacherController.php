<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return "This is the page to list all teachers";
    }

    public function show($id)
    {
        return "This is the page to show a teacher with id: {$id}";
    }

    public function create()
    {
        return "This is the page to create a new teacher";
    }

    public function store(Request $request)
    {
        // Logika untuk menyimpan data guru baru
        return "Teacher has been added";
    }   

    public function edit($id)
    {
        return "This is the page to edit a teacher with id: {$id}";
    }

    public function update(Request $request, $id)
    {
        // Logika untuk memperbarui data guru
        return "Teacher with id: {$id} has been updated";
    }

    public function destroy($id)
    {
        // Logika untuk menghapus data guru
        return "Teacher with id: {$id} has been deleted";
    }
}
