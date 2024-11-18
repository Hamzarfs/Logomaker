<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;


class Blog extends Model
{
   // use SoftDeletes;

    protected $fillable = [
        'title', 'description', 'image', 'meta_title', 'meta_desc', 'date'
    ];

     
}

