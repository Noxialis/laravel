<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    return $this->belongsToMany(Article::class);
}
