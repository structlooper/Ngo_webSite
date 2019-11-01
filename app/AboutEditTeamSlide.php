<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutEditTeamSlide extends Model
{
    protected $table = 'about_team_slide_data';
    protected $fillable = ['slide_details','image'];
}
