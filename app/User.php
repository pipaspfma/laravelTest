<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','email', 'password', 'typeUser','isAdmin', 'firstName', 'lastName', 'photo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function photo()
    {
        if(file_exists( public_path() . '/images/logos/' . $this->photo)) {
        return '/images/logos/' . $this->photo;
        } else {
            return '/images/logos/default.jpg';
        }
    }
}
