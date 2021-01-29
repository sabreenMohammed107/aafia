<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  //main settings
  protected $table = 'orders';
  protected $primaryKey = 'id';
  protected $fillable = [
    'order_date',
    'order_no',
    'total_amount',
    'order_status_id',
    'analysis_lab_id',
    'scan_lab_id',
    'patient_id',
    'notes',
  ];
  public function analysislab(){
    return $this->belongsTo('App\Models\Lab','analysis_lab_id');
}

public function scanlab(){
  return $this->belongsTo('App\Models\Lab','scan_lab_id');
}
}
