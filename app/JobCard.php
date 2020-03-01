<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobCard extends Model
{


  // protected $table = 'job_cards';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'sending_area',
            'date_in',
            'date_out',
            'fleet-no',
            'plant_cost_center',
            'make',
            'model',
            'hr/km_reading',
            'total_part_cost',
            'total_labour_cost',
            'total_repair_cost',
            'total_outside_repair_cost',
            
            
  ];



    public function personnel()
    {
       return $this->hasMany(Personnel::class);
    }

    public function outsideRepairs()
    {
       return $this->hasMany(OutsideRepairs::class);
    }

    public function partWorkedOn()
    {
       return $this->hasMany(PartWorkedOn::class);
    }
   
    public function equipmentMasterList()
    {
       return $this->hasOne(EquipmentMasterList::class);
    }

    public function repairJobCard()
    {
       return $this->hasMany(RepairJobCard::class);
    }

}