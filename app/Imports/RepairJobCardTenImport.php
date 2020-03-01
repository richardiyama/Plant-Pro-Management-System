<?php

namespace App\Imports;

use App\RepairJobCard;
use Maatwebsite\Excel\Concerns\ToModel;

use DateTime;

use Maatwebsite\Excel\Concerns\WithMappedCells;

class RepairJobCardTenImport implements ToModel,WithMappedCells
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
            'C22' => 'C22',
            'D22' => 'D22',
            'E22' => 'E22',
            'F22' => 'F22',
            'G22' => 'G22',
            'H22' => 'H22',
            'J7'  => 'J7',
            'P30' => 'P30',
            'M14' => 'M14',
             'O12'  => 'O12',
             'K13' => 'K13',
             'K14'  => 'K14',
             'M14' => 'M14',
             'O14'  => 'O14',
             'K15' => 'K15', 
             'J7'  => 'J7',

             'J30'  => 'J30',
             'K30' => 'K30',
             'L30'  => 'L30',
             'N30'  => 'N30',
             'O30' => 'O30',
             'P30' => 'P30',
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
            'job_date'  => date('Y-m-d', strtotime(str_replace('-', '/', $this->formatDateExcel($row['C22'])))),
            'repair_code' => $row['D22'],
            'description' =>  $row[ 'E22'],
            'part_no'  => $row['F22'],
            'quantity'  => $row['G22'],
            'unit_price' => $row['H22'],
            'cost' => $row['P30'] * 1200,
            'outside_cost' => $row['M14'] + 0,
            'technician_name'  => $row['J30'],
            'employee_number' => $row['K30'],
            'personnel_job_date' => date('Y-m-d', strtotime(str_replace('-', '/', $this->formatDateExcel($row['L30'])))),
            'time_in'  =>  $row['N30'],
            'time_out' =>  $row['O30'],
            'Hours' =>$row['P30'],
        ]);
    }
}
