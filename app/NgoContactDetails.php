<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NgoContactDetails extends Model
{
    protected $table = 'ngo_contact_details';
    protected $fillable = ['address','number','email'];
}
