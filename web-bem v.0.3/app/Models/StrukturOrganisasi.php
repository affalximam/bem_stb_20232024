<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrukturOrganisasi extends Model
{
    protected $table = 'anggota_bem';
    protected $primaryKey = 'id_anggota';

    protected $fillable = [
        'id_anggota',
        'nama_anggota',
        'gambar_anggota',
        'posisi_anggota',
        'jabatan_anggota',
        'jurusan_anggota',
        'angkatan_anggota',
        // Add any other columns you want to retrieve
    ];
}
