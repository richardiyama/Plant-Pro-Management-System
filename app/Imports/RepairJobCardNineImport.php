<?php

namespace App\Imports;

use App\RepairJobCard;
use Maatwebsite\Excel\Concerns\ToModel;

use DateTime;

use Maatwebsite\Excel\Concerns\WithMappedCells;

class RepairJobCardNineImport implements ToModel,WithMappedCells
{
    private function transformDateTime($value, $format = 'Y-m-d')
    {
        try {
                //return Carbon::instance(Date::excelToDateTimeObject($value))->format($format);
             } catch (\ErrorException $e) {
             return Carbon::createFromFormat($format, $value);
            }
   }
    protected function formatDateExcel($date){ if (gettype($date) === 'double') { $birthday = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($date); return $birthday->format('n/j/Y'); } return $date; }


    public function mapping(): array
    {
        return [
            'C21' => 'C21',
            'D21' => 'D21',
            'E21' => 'E21',
            'F21' => 'F21',
            'G21' => 'G21',
            'H21' => 'H21',
            'J7'  => 'J7',
            'P29' => 'P29',
            'M14' => 'M14',
             'O12'  => 'O12',
             'K13' => 'K13',
             'K14'  => 'K14',
             'M14' => 'M14',
             'O14'  => 'O14',
             'K15' => 'K15', 
             'J7'  => 'J7',

             'J29'  => 'J29',
             'K29' => 'K29',
             'L29'  => 'L29',
             'N29'  => 'N29',
             'O29' => 'O29',
             'P21' => 'P21',
             'Q21' => 'Q21',    
             'J7'  => 'J7',
      ];
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new RepairJobCard([
            'company_name'  => $row['K13'],
            'invoice_no' => $row['K14'],
            'amount' => $row['M14'],
            'date_of_repair' => date('Y-m-d', strtotime(str_replace('-', '/', $this->formatDateExcel($row['O14'])))),
            'repairs_brief_description'  => $row['K15'],
            'outside_repair_code' => $row['O12'],
            'job_cards' => $row[ 'J7'],
            'job_date'  => date('Y-m-d', strtotime(str_replace('-', '/', $this->formatDateExcel($row['C21'])))),
            'repair_code' => $row['D21'],
            'description' =>  $row[ 'E21'],
            'part_no'  => $row['F21'],
            'quantity'  => $row['G21'],
            'unit_price' => $row['H21'],
            'cost' => $row['P29'] * 1200,
            'outside_cost' => $row['M14'] + 0,
            'technician_name'  => $row['J29'],
            'employee_number' => $row['K29'],
            'personnel_job_date' =>  date('Y-m-d', strtotime(str_replace('-', '/', $this->formatDateExcel($row['L29'])))),
            'time_in'  =>  $row['N29'],
            'time_out' =>  $row['O29'],
            'Hours' =>$row['P29'],
        ]);
    }
}
