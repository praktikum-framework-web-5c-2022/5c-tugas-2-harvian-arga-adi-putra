<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(MatakuliahController::class)->group(function () {
    Route::get('/insert_mk', 'insert');
    Route::get('/select_mk', 'select');
    Route::get('/update_mk', 'update');
    Route::get('/delete_mk', 'delete');
});

Route::controller(MahasiswaController::class)->group(function () {
    Route::get('/insert_mhs', 'insert');
    Route::get('/select_mhs', 'select');
    Route::get('/update_mhs', 'update');
    Route::get('/delete_mhs', 'delete');
});

Route::controller(DosenController::class)->group(function () {
    Route::get('/insert_dsn', 'insert');
    Route::get('/select_dsn', 'select');
    Route::get('/update_dsn', 'update');
    Route::get('/delete_dsn', 'delete');
});

Route::get('/', function () {
    $dsn = [
        'Gio Fany M.Kom',
        'Rahmat Asep gunawan M.Pd',
        'Carlitos Demante Bonaparte M.Pd',
        'Harani Sakura M.Kom',
        'Asep Nasrullah M.Ag',
        'Puji Rianto Nugraha M.Kom',
        'Stipen Wiliyam M.Kom',
        'Tito Dimas Aprianto M.Pd',
        'Rizki Darmawan M.Kom',
        'Faiha Syahla M.Pd',
    ];
    return view('dosen')
        ->with(
            'dosen',
            $dsn
        );
});
Route::get('/matkul', function () {
    $mk = [
        'Pemrograman Mobile',
        'Pancasila',
        'Budaya Bangsa',
        'Embedded System',
        'Pendidikan Agama Islam',
        'Framework',
        'Cloud Computing',
        'Bahasa Inggris',
        'Jaringan Komputer',
        'Kalkulus',
    ];
    return view('matakuliah')
        ->with(
            'matkul',
            $mk
        );;
});
Route::get('/mahasiswa', function () {
    $mhs = [
        'Harvian Arga',
        'Anggi Permatasari',
        'Syukhron Hermawan ',
        'Rio Tugas Prakasa',
        'Rian Angra Wijayanto',
        'Atma Wijaya Santoso',
        'Tri Sutrisno Atma Negoro',
        'Budi Setiawan',
        'Sekar Agustin Meilani Julia',
        'HabiaH Dharma',
    ];
    return view('mahasiswa')
        ->with(
            'mahasiswa',
            $mhs
        );
});
