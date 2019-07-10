<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = ['name', 'description', 'price', 'sale_price', 'category'];
  //ho inserito i nomi delle colonne del database
  //campi che compila in automatico attraverso un form
}
