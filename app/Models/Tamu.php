<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    protected $fillable = [
        'tanggal',
        'nama',
        'alamat',
        'tujuan',
        'nope',
        'kode_unik'
    ];
}
