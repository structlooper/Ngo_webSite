<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class homeCretingImpact extends Model
{
    protected $table = 'home_creting_impact';

    protected $fillable = ['image','heading','content'];

}
