<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class homeSlide extends Model
{
    protected $table = 'home_slide';
    protected $fillable = ['image','content'];
}
