<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // GETTER de l'auteur à qui appartient ce post
    public function author(){
      return $this->belonsTo('App\Models\Author');
    }

    // GETTER de la catégorie à qui appartient ce post
    public function categorie(){
      return $this->belonsTo('App\Models\Categorie');
    }

    // GETTER des commentaires du post
    public function comments(){
      return $this->hasMany('App\Models\Comment');
    }

    // GETTER des tags du post
    public function tags(){
      return $this->hasMany('App\Models\Tag', 'posts_has_tags');
    }
}
