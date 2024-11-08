<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cds extends Model
{
    //
    protected $fillable = [
        'title', // Judul film
        'producer', // Nama produser
        'genre', // Genre film, misalnya "Drama", "Aksi", "Komedi"
        'year', // Tahun rilis film
        'duration', // Durasi film dalam menit
        'studio', // Studio produksi film
    ];
}
