<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = [
    	'user_id',
    	'company_id',
    	'amount',
    ];
}
