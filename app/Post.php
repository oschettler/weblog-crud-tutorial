<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'summary', 'body', 'published_at'];
    protected $dates = [
        'created_at',
        'updated_at',
        'published_at',
    ];
}
