<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = ['user_id', 'name', 'price', 'description', 'categorie_id'];
}
