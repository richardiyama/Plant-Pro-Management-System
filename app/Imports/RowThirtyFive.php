<?php

namespace App\Imports;

use App\PartWorkedOn;
use Maatwebsite\Excel\Concerns\ToModel;

class RowThirtyFive implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new PartWorkedOn([
            //
        ]);
    }
}
