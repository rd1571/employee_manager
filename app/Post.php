<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //variables

    protected $table = 'post';
    public $timestamps = true;

    protected $fillable  = ['title', 'description'];
}
