<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pdsdrs extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fleet_no',
        'idle',
        'available',
        'breakdown',
        'availability_status',
        'fuel_quantity',
        'fuel_type',
        'e_o',
        't_o',
        'h_o',
        'other_oil',
        'filters_issued',
        'hour_meter_reading',
        'unit',
        'remarks',
        'date_entry',
        'location',
              
              
    ];
  
}
