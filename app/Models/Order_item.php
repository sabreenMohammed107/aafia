<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_item extends Model
{
    //
    protected $table = 'order_items';
    protected $primaryKey = 'id';
    protected $fillable = [
        'scan_id',
        'analysis_id',
        'order_id',
        'original_cost',
        'discount_pct',
        'notes',
    ];

    public function analysis(){
        return $this->belongsTo('App\Models\Analysis','analysis_id');
    }

    public function order(){
        return $this->belongsTo('App\Models\Order','order_id');
    }
    public function scan(){
        return $this->belongsTo('App\Models\Scan','scan_id');
    }
}
