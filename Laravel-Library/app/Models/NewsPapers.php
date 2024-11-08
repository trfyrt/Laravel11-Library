<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsPapers extends Model
{
    //
    protected $fillable = [
        'title',
        'publisher',
        'publicationDate',
        'editor',
        'language',
        'pageCount',
    ];
}
