<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class homeAboutNgoData extends Model
{
    protected $table = 'home_about_ngo_data';

    protected $fillable = ['image','heading','content'];

}
