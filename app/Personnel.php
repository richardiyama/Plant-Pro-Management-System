<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{


 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'technician_name',
        'employee_number',
        'job_date',
        'time_in',
        'time_out',
        'Hours',
        'repair_code',
        'job_cards',
              
    ];


    public function jobCard()
    {
        return $this->belongsTo(JobCard::class);
    }
}
