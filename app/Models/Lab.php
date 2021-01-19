<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    //main settings
   protected $table = 'labs';
   protected $primaryKey = 'id';
   protected $fillable = [
    'en_name',
    'ar_name',
    'en_slogan',
    'ar_slogan',
    'overview',
    'description',
    'phone',
    'address',
    'contact_person',
    'contact_person_mobile',
    'logo',
    'active',
   ];

}
