<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RepairJobCard extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_name',
        'invoice_no',
        'amount',
        'date_of_repair',
        'repairs_brief_description',
        'job_cards',
        'job_date',
        'repair_code',
        'description',
        'part_no',
        'quantity',
        'unit_price',
        'cost',
        'outside_cost',
        'outside_repair_code',
        'technician_name',
        'employee_number',
        'personnel_job_date',
        'time_in',
        'time_out',
        'Hours',
    
        
              
    ];

    public function jobCard()
    {
        return $this->belongsTo(JobCard::class);
    }

    
    public function equipmentMasterList()
    {
        return $this->belongsTo(EquipmentMasterList::class);
    }
}
