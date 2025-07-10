<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $table = 'motor';
    
    protected $fillable = [
        'id_motor',
        'nomor_polisi',
        'jenis',
        'harga',
        'durasi',
        'is_available',
        'pemilik_motor',
        'gambar_motor',
    ];

}
