<?php

namespace App\Imports;

use App\Pdsdrs;
use Maatwebsite\Excel\Concerns\ToModel;
use DateTime;
use Carbon\Carbon;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Illuminate\Support\Str;

class PdsdrsImport implements ToModel, WithStartRow
{


    

  



            // public function modelTwo(array $row)
            // {
                 //$splitRow = explode(' ', $row['N2'], 2);
                 //dd($splitRow[1]);
                // return new Pdsdrs([
                   //  'date_entry'=> date('Y-m-d', strtotime(str_replace('-', '/', $this->formatDateExcel($splitRow[1])))),
                   //  'location'=> $row['C3'],
                    
                    
                // ]);
           //  }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //DB::table('pdsdrs')->join('pdsdr_date_reports','pdsdrs.created_at','=','pdsdr_date_reports.created_at')->where('pdsdrs.created_at','=','pdsdr_date_reports.created_at')->select('pdsdr_date_reports.date_entry')
     $val = DB::table('pdsdr_date_reports')->where('pdsdr_date_reports.created_at','=',Carbon::now())->first();

     $the_fleet_no = DB::table('equipmentmasterlist')->where('fleet_no','=',$row[1])->first();
    // dd(strpos($row[1], '-') ? $row[1]:$the_fleet_no->fleet_no);
     if(($val) && ($the_fleet_no)){
        return new Pdsdrs([
            'fleet_no'=> $the_fleet_no->fleet_no,
            'idle'=> $row[2],
            'available'=> $row[3],
            'breakdown'=> $row[4],
            'availability_status'=> $row[5],
            'fuel_quantity'=> $row[6],
            'fuel_type'=> $row[7],
            'e_o'=> $row[8],
            't_o'=> $row[9],
            'h_o'=> $row[10],
            'other_oil'=> $row[11],
            'filters_issued'=> $row[12],
            'hour_meter_reading'=> $row[13],
            'unit'=> $row[14],
            'remarks'=> $row[15],
            'date_entry'=>  $val->date_entry,
            'location' => $val->location,
           
           
        ]);
      dd($row);
        

     }
    }

  
    /**
     * @return int
     */
    public function startRow(): int
    {
        return 7;
    }
}