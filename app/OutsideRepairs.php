<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutsideRepairs extends Model
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
        'repair_code',
        'job_cards',
              
    ];

    public function jobCard()
    {
        return $this->belongsTo(JobCard::class);
    }
}
