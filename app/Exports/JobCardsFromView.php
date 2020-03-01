<?php

namespace App\Exports;

use App\PartWorkedOn;
use Maatwebsite\Excel\Concerns\FromCollection;

class JobCardsFromView implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PartWorkedOn::all();
    }
}
