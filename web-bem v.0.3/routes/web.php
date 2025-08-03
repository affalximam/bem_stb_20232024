<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\InformasiBemController;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;

Route::get('/', [InformasiBemController::class, 'homeView']);

Route::get('/tentang', [InformasiBemController::class, 'visiMisi'] );

Route::get('/struktur-organisasi', [StrukturOrganisasiController::class, 'strukturOrganisasi'] );

Route::get('/struktur-organisasi/{nama_anggota}', [StrukturOrganisasiController::class, 'DetailAnggotas'] );

Route::get('/program-kerja', [DepartemenController::class, 'showDepartement'] );

Route::get('/program-kerja/{departemen}', [DepartemenController::class, 'DetailProker'] );

Route::get('/dokumentasi', [DokumentasiController::class, 'showDokumentasi'] );

Route::get('/dokumentasi/{nama_kegiatan}', [DokumentasiController::class, 'DetailDokumentasi'] );

Route::get('/kontak', function () {
    return view('kontak');
});

Route::post('/contact', [ContactController::class, 'addMessage'])
        ->name('contact.add.message');

Route::get('/developer', function () {
    return view('developer');
});

Route::get('/login', function () {
    return redirect('/admin/login');
})->name('login');

Route::post('admin/logout', [AdminController::class, 'logout'])
    ->middleware('auth')
    ->name('admin.logout');


Route::get('/admin/login', [AdminController::class, 'showLoginForm'])
    ->name('admin.login');

Route::post('/admin/login', [AdminController::class, 'login'])
    ->name('admin.login.submit');

Route::get('/admin', [AdminController::class, 'index'])
        ->middleware('auth')
        ->name('admin.index');

Route::get('admin/settings', [AdminController::class, 'setting'])
        ->middleware('auth')
        ->name('admin.setting');
    
Route::post('admin/settings', [AdminController::class, 'updateSetting'])
        ->middleware('auth')
        ->name('admin.setting');
    

Route::get('/admin/sambutan-presiden-mahasiswa', [InformasiBemController::class, 'sambutan_presiden_mahasiswa'])
        ->middleware('auth')
        ->name('admin.sambutan_presiden');

Route::post('/admin/sambutan-presiden-mahasiswa/sambutan', [InformasiBemController::class, 'updateSambutanPresidenMahasiswa'])
        ->middleware('auth')
        ->name('admin.updateSambutan');

Route::post('/admin/sambutan-presiden-mahasiswa/foto', [InformasiBemController::class, 'updateFotoPresidenMahasiswa'])
        ->middleware('auth')
        ->name('admin.updateFotoPresma');
     

Route::get('/admin/visi-misi', [InformasiBemController::class, 'visi_misi'])
        ->middleware('auth')
        ->name('admin.visi_misi');

Route::post('/admin/visi-misi', [InformasiBemController::class, 'update_visi_misi'])
        ->middleware('auth')
        ->name('admin.update_visi_misi');

Route::get('/admin/proker-bem', [DepartemenController::class, 'proker_bem_edit'])
        ->middleware('auth')
        ->name('admin.departemen');
Route::post('/admin/proker-bem', [DepartemenController::class, 'update_proker_bem'])
        ->middleware('auth')
        ->name('admin.update_proker_bem');


Route::get('/admin/departemen', [DepartemenController::class, 'departemen'])
        ->middleware('auth')
        ->name('admin.dashboard');

Route::get('/admin/departemen/edit/{id_departemen}', [DepartemenController::class, 'departemen_edit'])
        ->middleware('auth')
        ->name('admin.departemen');

Route::post('/admin/departemen/edit/{id_departemen}', [DepartemenController::class, 'update_departemen'])
        ->middleware('auth')
        ->name('admin.update_departemen');


Route::get('/admin/departemen/add', [DepartemenController::class, 'departemen_add'])
        ->middleware('auth')
        ->name('admin.dashboard');

Route::post('/admin/departemen/add}', [DepartemenController::class, 'add_departemen'])
        ->middleware('auth')
        ->name('admin.add_departemen');
    

Route::get('/admin/anggota', [StrukturOrganisasiController::class, 'anggota'])
        ->middleware('auth')
        ->name('admin.anggota');

Route::post('/admin/anggota/update/{id_anggota}', [StrukturOrganisasiController::class, 'updateAnggota'])
        ->middleware('auth')
        ->name('admin.anggota.update');

Route::delete('/admin/anggota/delete/{id_anggota}', [StrukturOrganisasiController::class, 'deleteAnggota'])
        ->middleware('auth')
        ->name('admin.anggota.delete');


Route::get('/admin/anggota/add', [StrukturOrganisasiController::class, 'anggota_add'])
        ->middleware('auth')
        ->name('admin.dashboard');

Route::post('admin/anggota/add', [StrukturOrganisasiController::class, 'add_anggota'])
        ->middleware('auth')
        ->name('admin.anggota.add');


Route::get('admin/dokumentasi', [DokumentasiController::class, 'dokumentasi'])
        ->middleware('auth')
        ->name('admin.dokumentasi');

Route::get('admin/dokumentasi/edit/{id_dokumentasi}', [DokumentasiController::class, 'dokumentasiEdit'])
        ->middleware('auth')
        ->name('admin.dokumentasi.edit');
    
Route::post('admin/dokumentasi/edit/{id_dokumentasi}', [DokumentasiController::class, 'updateDokumentasi'])
        ->middleware('auth')
        ->name('admin.edit.dokumentasi');

Route::get('admin/dokumentasi/add', [DokumentasiController::class, 'dokumentasiAdd'])
        ->middleware('auth')
        ->name('admin.dokumentasi.add');
        
Route::post('admin/dokumentasi/add', [DokumentasiController::class, 'addDokumentasi'])
        ->middleware('auth')
        ->name('admin.add.dokumentasi');
        
Route::post('/admin/dokumentasi/delete/{id}', [DokumentasiController::class, 'deleteDokumentasi'])
        ->middleware('auth')
        ->name('admin.delete.dokumentasi');

Route::get('admin/contact', [ContactController::class, 'showContactResponse'])
        ->middleware('auth')
        ->name('admin.contact');
        