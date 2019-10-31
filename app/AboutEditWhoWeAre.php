<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutEditWhoweare extends Model
{
    protected $table = 'about_who_we_ares';
    protected $fillable = ['heading','content','image'];
}
