<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
      protected $table = 'categories_new';
    use HasFactory;
    public $timestamps = false;
    public function movie(){

    	return $this->hasMany(Movie::class)->orderBy('id','DESC');
    }
}
