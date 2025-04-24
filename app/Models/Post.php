<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'image_path',
        'excerpt',
        'content',
        'is_published',
        'published_at',
        'user_id',
        'category_id',
      ];
  
      //CASTEANDO LOS DATOS
      protected $casts = [
         'is_published' => 'boolean',
         'published_at' => 'datatime',
      ];

      //RELACIONES UNO A MUCHO INVERSA
      public function category(){
        return $this->belongsTo(Category::class);
      }

      public function user(){
        return $this->belongsTo(User::class);
      }
        //RELACION uno A MUCHO

      public function comments(){
        return $this->hasMany(Comment::class);
      }

      //relacion mucho a muchos
      public function tags(){
        return $this->belongsToMany(Tag::class);
      }

}
