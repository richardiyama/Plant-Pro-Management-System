<?php

namespace App\Imports;

use App\RepairJobCard;
use Maatwebsite\Excel\Concerns\ToModel;

use DateTime;

use Maatwebsite\Excel\Concerns\WithMappedCells;

class RepairJobCardSevenImport implements ToModel,WithMappedCells
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
            'C19' => 'C19',
            'D19' => 'D19',
            'E19' => 'E19',
            'F19' => 'F19',
            'G19' => 'G19',
            'H19' => 'H19',
            'J7'  => 'J7',
            'P27' => 'P27',
            'M14' => 'M14',
             'O12'  => 'O12',
             'K13' => 'K13',
             'K14'  => 'K14',
             'M14' => 'M14',
             'O14'  => 'O14',
             'K15' => 'K15', 
             'J7'  => 'J7',

             'J27'  => 'J27',
             'K27' => 'K27',
             'L27'  => 'L27',
             'N27'  => 'N27',
             'O27' => 'O27',
             'P27' => 'P27',
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
            'job_date'  => date('Y-m-d', strtotime(str_replace('-', '/', $this->formatDateExcel($row['C19'])))),
            'repair_code' => $row['D19'],
            'description' =>  $row[ 'E19'],
            'part_no'  => $row['F19'],
            'quantity'  => $row['G19'],
            'unit_price' => $row['H19'],
            'cost' => $row['P27'] * 1200,
            'outside_cost' => $row['M14'] + 0,
            'technician_name'  => $row['J27'],
            'employee_number' => $row['K27'],
            'personnel_job_date' =>  date('Y-m-d', strtotime(str_replace('-', '/', $this->formatDateExcel($row['L27'])))),
            'time_in'  =>  $row['N27'],
            'time_out' =>  $row['O27'],
            'Hours' =>$row['P27'],
        ]);
    }
}
