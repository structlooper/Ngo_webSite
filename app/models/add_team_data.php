<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class add_team_data extends Model
{
    protected $table = 'team_datas';
    protected $fillable = ['image','department_name','member_name','member_email','member_more_details'];
}
