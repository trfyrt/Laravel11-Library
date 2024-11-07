<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinalYearProjects extends Model
{
    //
    protected $fillable = [
        'title',
        'author',
        'student_id',
        'department',
        'year',
        'abstract',
        'status', // Status skripsi, misalnya "Lulus", "Ditolak", "Revisi"
        'grade',
    ];
}
