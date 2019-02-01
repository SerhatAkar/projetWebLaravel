<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evenement extends Model
{
  

    
    protected $fillable = [
        'name', 'place', 'desc','imagePath',
   ];
   protected $table = 'evenements';
}

