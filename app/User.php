<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','lastname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function address()
    {
        return $this->hasOne('App\Address');
    }

    public function company()
    {
        return $this->hasOne('App\Company');
    }

    public function loans()
    {
        return $this->hasMany('App\Loan');
    }

    public function transaction()
    {
        return $this->hasMany('App\Transaction');
    }
}
