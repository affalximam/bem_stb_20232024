<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
    protected $table = "dokumentasi_bem";
    protected $primaryKey = 'id_dokumentasi';

    protected $fillable = [
        'id_dokumentasi',
        'nama_dokumentasi',
        'waktu_dokumentasi',
        'gambar_dokumentasi',
        'deskripsi_dokumentasi',
    ];
}
