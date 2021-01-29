<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Analysis extends Model
{
     //main settings
   protected $table = 'analyses';
   protected $primaryKey = 'id';
   protected $fillable = [
    'en_name',
    'ar_name',
    'en_desc',
    'ar_desc',
    'original_cost',
    'discount_pct',
    'lab_id',
    'notes',
    'active',
   ];


   public function analysis()
   {
       return $this->hasManyThrough('App\Models\Order', 'App\Models\Lab');
   }
}

