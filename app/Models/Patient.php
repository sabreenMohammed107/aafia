<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
     //main settings
     protected $table = 'patients';
     protected $primaryKey = 'id';
     protected $fillable = [
        'image',
        'marital_status_id',
        'city_id',
        'user_id',
        'address',
        'birth_date',
        'gender',
        'blood_type',
        'tall',
        'width',
        'smoker',
        'chronic_diseases',
        'previous_surgeries',
        'current_medications',
        'vaccinations',
        'sensitivity',
        'family_diseases',
        'notes',
        'syndicate_id',
     ];

     public function user(){
      return $this->belongsTo('App\User','user_id');
  }

  public function syndicate(){
   return $this->belongsTo('App\Models\Syndicate','syndicate_id');
}
}
