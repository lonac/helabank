<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
    	'name',
    	'description',
    	'user_id',
    ];

    public function ceo()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }
}
