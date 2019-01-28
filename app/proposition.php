<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proposition extends Model
{
    protected $fillable = [
        'name', 'place', 'desc'
   ];
   protected $table = 'propositions';
}

