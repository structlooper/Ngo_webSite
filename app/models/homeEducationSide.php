<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class homeEducationSide extends Model
{
    protected $table = 'home_education_slide';

    protected $fillable = ['image','heading','content'];

}
