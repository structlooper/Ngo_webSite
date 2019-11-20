<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class homeHealthSlide extends Model
{
    protected $table = 'home_health_slide';
    protected $fillable = ['image','heading','content'];
}
