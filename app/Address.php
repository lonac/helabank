<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
    	'line_one',
    	'line_two',
    	'user_id',
    ];
}
