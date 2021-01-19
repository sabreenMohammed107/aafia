<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsLetter extends Model
{
     //main settings
     protected $table = 'news_letters';
     protected $primaryKey = 'id';
     protected $fillable = [
      'email',
  
     ];
}
