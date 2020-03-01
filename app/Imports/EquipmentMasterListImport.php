<?php

namespace App\Imports;

use App\EquipmentMasterList;
use Maatwebsite\Excel\Concerns\ToModel;
use DateTime;
use Carbon\Carbon;
use PhpOffice\PhpSpreadsheet\Shared\Date;


use Maatwebsite\Excel\Concerns\WithStartRow;
//use Maatwebsite\Excel\Imports\HeadingRowFormatter;

//HeadingRowFormatter::default('none');

class EquipmentMasterListImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    
    private function transformDateTime($value, $format = 'Y-m-d')
    {
        try {
                //return Carbon::instance(Date::excelToDateTimeObject($value))->format($format);
             } catch (\ErrorException $e) {
             return Carbon::createFromFormat($format, $value);
            }
   }
    protected function formatDateExcel($date){ if (gettype($date) === 'double') { $birthday = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($date); return $birthday->format('n/j/Y'); } return $date; }



    public function model(array $row)
    {
      // dd($row);
       
        //dd(Carbon::parse(date('d-m-Y', strtotime(str_replace('-', '/', $this->formatDateExcel($row[30]))))),);
        return new EquipmentMasterList([
            
            'fleet_no'=> $row[1],
            'parent_fleet_no'=> $row[2],
            'code'=> $row[3],
            'fleet-no_description'=> $row[4],
            'Registration_no'=> $row[5],
            'hourmeter_reading'=> $row[6],
            'attachment'=> $row[7],
            'type_code'=> $row[8],
            'type_description'=> $row[9],
            'make'=> $row[10],
            'model'=> $row[11],
            'machine_serial_no'=> $row[12],
            'machine_arr_n'=> $row[13],
            'engine_make'=> $row[14],
            'engine_model'=> $row[15],
            'engine_serial_no'=> $row[16],
            'engine_arr_n'=> $row[17],
            'power_rating_hp_kw'=> $row[18],
            'capacity'=> $row[19],
            'assesment'=> $row[20],
            'condition'=> $row[21],
            'region'=> $row[22],
            'project_code'=> $row[23],
            'project_description'=> $row[24],
            'users'=> $row[25],
            'ownership'=> $row[26],
            'year_purchase'=> $row[27],
            'mfg_year'=> $row[29],
            'comm_date'=> Carbon::parse(date('d/m/Y', strtotime(str_replace('-', '/', $this->formatDateExcel($row[30]))))),
            'invoice'=> $row[31],
            'order_no'=> $row[32],
            'date_in'=> Carbon::parse(date('d/m/Y', strtotime(str_replace('-', '/', $this->formatDateExcel($row[33]))))),
            'purchase_condition'=> $row[34],
            'landed_cost'=> $row[35],
            'market_value'=> $row[36],
            'location'=> $row[37],
        ]);

         
    }
   
    
/**
     * @return int
     */
    public function startRow(): int
    {
        return 4;
    }
   
}
