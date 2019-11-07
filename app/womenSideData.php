<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class womenSideData extends Model
{
    protected $table = 'women_side_data_save';
    protected $fillable = ['heading','content','image'];

}
