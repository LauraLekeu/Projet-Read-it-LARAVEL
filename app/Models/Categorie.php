<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    // GETTER du user à quui appartient ce post
    public function posts() {
      return $this->hasMany('App\Models\Post');
    }

}
