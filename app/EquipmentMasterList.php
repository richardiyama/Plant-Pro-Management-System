<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EquipmentMasterList extends Model
{
    protected $table = 'EquipmentMasterList';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
              'fleet_no',
              'parent_fleet_no',
              'fleet-no_description',
              'Registration_no',
              'hourmeter_reading',
              'attachment',
              'type_code',
              'type_description',
              'make',
              'model',
              'machine_serial_no',
              'machine_arr_n',
              'engine_make',
              'engine_model',
              'engine_serial_no',
              'engine_arr_n',
              'power_rating_hp_kw',
              'capacity',
              'assesment',
              'condition',
              'region',
              'project_code',
              'project_description',
              'users',
              'ownership',
              'year_purchase',
              'mfg_year',
              'comm_date',
              'invoice',
              'order_no',
              'date_in',
              'purchase_condition',
              'landed_cost',
              'market_value',
              'location',
              
    ];


    public function jobCard()
    {
        return $this->belongsTo(JobCard::class);
    }

    public function repairJobCard()
    {
       return $this->hasMany(RepairJobCard::class);
    }

    
}
