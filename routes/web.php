<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModelController;

Route::get('/', [ModelController::class,'welcome']);

//Proyek 
Route:: get('/proyek', [ModelController::class,'proyek']);
Route::get('/createproyek', [ModelController::class,'createproyek']);
Route::post('/saveproyek', [ModelController::class,'saveproyek']);
Route::post('/delproyek/{id}', [ModelController::class,'delproyek'])
->name('hapusproyek');
Route::get('/editproyek/{id}', [ModelController::class,'editproyek'])
->name('ubahproyek');
Route::post('/updateproyek/{id}', [ModelController::class,'updateproyek'])
->name('modifproyek'); 

//Tim
Route:: get('/tim', [ModelController::class,'tim']);
Route::get('/createtim', [ModelController::class,'createtim']);
Route::post('/savetim', [ModelController::class,'savetim']);
Route::post('/deltim/{id}', [ModelController::class,'deltim'])
->name('hapustim');
Route::get('/edittim/{id}', [ModelController::class,'edittim'])
->name('ubahtim');
Route::post('/updatetim/{id}', [ModelController::class,'updatetim'])
->name('modiftim'); 

//Tugas 
Route:: get('/tugas', [ModelController::class,'tugas']);
Route::get('/createtugas', [ModelController::class,'createtugas']);
Route::post('/savetugas', [ModelController::class,'savetugas']);
Route::post('/deltugas/{id}', [ModelController::class,'deltugas'])
->name('hapustugas');
Route::get('/edittugas/{id}', [ModelController::class,'edittugas'])
->name('ubahtugas');
Route::post('/updatetugas/{id}', [ModelController::class,'updatetugas'])
->name('modiftugas'); 

//Anggota 
Route:: get('/anggota', [ModelController::class,'anggota']);
Route::get('/createanggota', [ModelController::class,'createanggota']);
Route::post('/saveanggota', [ModelController::class,'saveanggota']);
Route::post('/delanggota/{id}', [ModelController::class,'delanggota'])
->name('hapusanggota');
Route::get('/editanggota/{id}', [ModelController::class,'editanggota'])
->name('ubahanggota');
Route::post('/updateanggota/{id}', [ModelController::class,'updateanggota'])
->name('modifanggota'); 

//DetilTugas 
Route:: get('/detil', [ModelController::class,'detil']);
Route::get('/createdetil', [ModelController::class,'createdetil']);
Route::post('/savedetil', [ModelController::class,'savedetil']);
Route::post('/deldetil/{id}', [ModelController::class,'deldetil'])
->name('hapusdetil');
Route::get('/editdetil/{id}', [ModelController::class,'editdetil'])
->name('ubahdetil');
Route::post('/updatedetil/{id}', [ModelController::class,'updatedetil'])
->name('modifdetil'); 

//Laporan
Route::get('/lap1', [ModelController::class,'lap1']);
Route::get('/lap2', [ModelController::class,'lap2']);
Route::get('/lap2/search', [ModelController::class, 'searchLap2'])->name('lap2.search');
Route::get('/lap3', [ModelController::class,'lap3']);
Route::get('/lap3/search', [ModelController::class, 'searchLap3'])->name('lap3.search');

//Rekapitulasi
Route::get('/rek1', [ModelController::class,'rek1']);
Route::get('/rek2', [ModelController::class,'rek2']);
Route::get('/rek3', [ModelController::class,'rek3']);
Route::get('/rek4', [ModelController::class,'rek4']);
Route::get('/rek5', [ModelController::class,'rek5']);
