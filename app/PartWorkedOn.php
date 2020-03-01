<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartWorkedOn extends Model
{

/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'job_date',
        'repair_code',
        'description',
        'fleet-no',
        'part_no',
        'quantity',
        'unit_price',
        'job_cards',
        'cost',
        'outside_cost',
    ];

    public function jobCard()
    {
        return $this->belongsTo(JobCard::class);
    }
}
