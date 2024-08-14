<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    use HasFactory;
    protected $casts = [
        'tanggal_lahir' => 'date:Y-m-d',
    ];
    protected $fillable = [
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'sekolah',
        'keterangan',
    ];
}
