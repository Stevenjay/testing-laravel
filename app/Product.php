<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //List of things that we can assign enmass 
    protected $fillable = ['name', 'description', 'price', 'stock'];
}
