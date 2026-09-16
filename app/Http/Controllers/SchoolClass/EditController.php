<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
   {
    $title = 'Sistem Sekolah - Edit Kelas';

    $class = [
        'major_id' => 1,
        'teacher_id' => 1,
    ];

    $majors = [
        [
            'id' => 1,
            'code' => 'AKL',
            'name' => 'Akuntansi dan Keuangan Lembaga',
        ],
        [
            'id' => 2,
            'code' => 'TKJ',
            'name' => 'Teknik Komputer dan Jaringan',
        ],
        [
            'id' => 3,
            'code' => 'BD',
            'name' => 'Bisnis Digital',
        ],
    ];

    $teachers = [
        [
            'id' => 1,
            'name' => 'Ahmad Fauzi',
        ],
        [
            'id' => 2,
            'name' => 'covid-19',
        ],
    ];

    return view('classes.edit', [
        'title' => $title,
        'class' => $class,
        'majors' => $majors,
        'teachers' => $teachers,
    ]);
}
}
