<?php

namespace App;

class Likes extends Model
{
   protected $fillable = [
        'id', 'user_id', 'post_id',
    ];
}
