<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class educationSpecificWork extends Model
{
    protected $table = 'education_specific_work_save';
    protected $fillable = ['content','image'];

}
