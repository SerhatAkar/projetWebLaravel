<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evenement extends Model
{
    protected $fillable = [
        'name', 'place', 'desc'
   ];
   protected $table = 'evenements';
}
