<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name', 'rechtsform', 'unterzeile', 'kurztext', 'profil', 'status', 'category_id'];

    public function category()
    {
      return $this->belongsTo(Category::class);
    }
}
