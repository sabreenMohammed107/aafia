<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider_image extends Model
{
   //main settings
   protected $table = 'slider_images';
   protected $primaryKey = 'id';
   protected $fillable = [
    'image',
    'text',
    'sub_text',
    'slider_url',
    'order',
    'active',
   ];
}
