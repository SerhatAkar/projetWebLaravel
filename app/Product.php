<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class Product extends Model
{
    protected $fillable = ['imagePath', 'title', 'description', 'price'];
}
