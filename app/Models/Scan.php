<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scan extends Model
{
      //main settings
   protected $table = 'scans';
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
}
