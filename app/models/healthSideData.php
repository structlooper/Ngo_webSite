<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class healthSideData extends Model
{
    protected $table = 'health_side_data_save';
    protected $fillable = ['heading','content','image'];
}
