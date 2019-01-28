<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evenement extends Model
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * 
     * @var array
     */
    protected $fillable = [
         'email', 'password', 'lname','fname','username'
    ];
}
