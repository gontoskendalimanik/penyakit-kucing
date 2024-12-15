<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilAnalisa extends Model
{
    protected $table = 'DataPasien';



    public function get()
    {
        return $this->hasMany(Gejala::class, Penyakit::class, DataPasien::class);
    }

    protected $fillable = ['id_pasien', 'nama', 'kelamin', 'alamat', 'pemilik', 'nm_gejala', 'nm_penyakit', 'definisi'];
}
