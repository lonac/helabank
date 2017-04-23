<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StakeHolders extends Model
{
    protected $fillable = [
    	'user_id',
    	'company_id',
    	'firstname',
    	'lastname',
    	'position'
    ];
    
    public function company()
    {
    	return $this->belongsTo('App\Company');
    }

}
