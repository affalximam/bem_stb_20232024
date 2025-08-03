<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class InformasiBem extends Model
{
    protected $table = 'informasi_bem';

    protected $fillable = [
        'id_informasi',
        'nama_informasi',
        'isi_informasi',
        // Add any other columns you want to retrieve
    ];
}
