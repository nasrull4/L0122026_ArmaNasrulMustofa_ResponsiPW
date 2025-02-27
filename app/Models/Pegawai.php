<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'Pegawais';
    use HasFactory;
    protected $fillable = [
        'nama',
        'jabatan',
    ];
}
