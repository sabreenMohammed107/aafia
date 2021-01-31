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
    'visit_date',
    'v_from',
    'v_to',
  ];
  public function analysislab(){
    return $this->belongsTo('App\Models\Lab','analysis_lab_id');
}

public function scanlab(){
  return $this->belongsTo('App\Models\Lab','scan_lab_id');
}
public function items(){
  return $this->hasMany('App\Models\Order_item','order_id','id');
}

public function patient(){
  return $this->belongsTo('App\Models\Patient','patient_id');
}
}
