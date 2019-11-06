<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class educationSlide extends Model
{
    protected $table = 'education_slide';
    protected $fillable = ['image','content'];
}
