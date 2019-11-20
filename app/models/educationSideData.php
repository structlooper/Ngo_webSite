<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class educationSideData extends Model
{
    protected $table = 'education_side_data_save';
    protected $fillable = ['heading','content','image'];
}
