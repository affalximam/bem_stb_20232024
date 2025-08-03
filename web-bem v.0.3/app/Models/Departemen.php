<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    protected $table = 'departemen_bem';
    protected $primaryKey = 'id_departemen';

    protected $fillable = [
        'id_departemen',
        'departemen',
        'nama_departemen',
        'gambar_departemen',
        'proker_departemen',
    ];
}
