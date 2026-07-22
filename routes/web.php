<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\SchoolClass\CreateController;
use App\Http\Controllers\SchoolClass\EditController;
use App\Http\Controllers\SchoolClass\IndexController;
use App\Http\Controllers\SchoolClass\ShowController;
use App\Http\Controllers\SchoolClass\StoreController;
use App\Http\Controllers\SchoolClass\UpdateController;
use App\Http\Controllers\SchoolClass\DestroyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// management siswa //
Route::name('students.')->prefix('students')->group(function () {

route::get('/', [StudentController::class, 'index'])->name('index');
route::get('/create', [StudentController::class, 'create'])->name('create');
route::post('/', [StudentController::class, 'store'])->name('store');
route::get('/{id}', [StudentController::class, 'show'])->name('show');
route::get('/{id}/edit', [StudentController::class, 'edit'])->name('edit');
route::put('/{id}', [StudentController::class, 'update'])->name('update');
route::delete('/{id}', [StudentController::class, 'destroy'])->name('destroy');
});


Route::name('teachers.')->prefix('teachers')->group(function () {

route::get('/', [TeacherController::class, 'index'])->name('index');
route::get('/create', [TeacherController::class, 'create'])->name('create');
route::post('/', [TeacherController::class, 'store'])->name('store');
route::get('/{id}', [TeacherController::class, 'show'])->name('show');
route::get('/{id}/edit', [TeacherController::class, 'edit'])->name('edit');
route::put('/{id}', [TeacherController::class, 'update'])->name('update');
route::delete('/{id}', [TeacherController::class, 'destroy'])->name('destroy');
});

Route::name('classes.')->prefix('classes')->group(function () {

route::get('/', [IndexController::class, 'index'])->name('index');
route::get('/create', [CreateController::class, 'create'])->name('create');
route::post('/', [StoreController::class, 'store'])->name('store');
route::get('/{id}', [ShowController::class, 'show'])->name('show');
route::get('/{id}/edit', [EditController::class, 'edit'])->name('edit');
route::put('/{id}', [UpdateController::class, 'update'])->name('update');
route::delete('/{id}', [DestroyController::class, 'destroy'])->name('destroy');

});

Route::resource('students', StudentController::class);