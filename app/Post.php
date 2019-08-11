<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    return $this->belongsTo(User::class);
}
