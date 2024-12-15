<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilAnalisa extends Model
{
    use HasFactory;

    protected $fillable = ['id_pasien', 'nama', 'kelamin', 'alamat', 'pemilik', 'id_gejala', 'nm_gejala', 'nm_penyakit', 'definisi'];
}
