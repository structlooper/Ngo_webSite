<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class healthSpecificWork extends Model
{
    protected $table = 'health_specific_work_save';
    protected $fillable = ['content','image'];
}
