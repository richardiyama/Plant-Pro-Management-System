<?php

namespace App\Imports;

use App\RepairJobCard;
use Maatwebsite\Excel\Concerns\ToModel;

use DateTime;

use Maatwebsite\Excel\Concerns\WithMappedCells;

class RepairJobCardImport implements ToModel,WithMappedCells
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
             'C13' => 'C13',
             'D13' => 'D13',
             'E13' => 'E13',
             'F13' => 'F13',
             'G13' => 'G13',
             'H13' => 'H13',
             'J7'  => 'J7',
             'P21' => 'P21',
             'M14' => 'M14',
             'O12'  => 'O12',
             'K13' => 'K13',
             'K14'  => 'K14',
             'M14' => 'M14',
             'O14'  => 'O14',
             'K15' => 'K15', 
             'J7'  => 'J7',

             'J21'  => 'J21',
             'K21' => 'K21',
             'L21'  => 'L21',
             'N21'  => 'N21',
             'O21' => 'O21',
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
            'job_date'  => date('Y-m-d', strtotime(str_replace('-', '/', $this->formatDateExcel($row['C13'])))),
            'repair_code' => $row['D13'],
            'description' =>  $row[ 'E13'],
            'part_no'  => $row['F13'],
            'quantity'  => $row['G13'],
            'unit_price' => $row['H13'],
            'cost' => $row['P21'] * 1200,
            'outside_cost' => $row['M14'] + 0,
            'technician_name'  => $row['J21'],
            'employee_number' => $row['K21'],
            'personnel_job_date' =>  date('Y-m-d', strtotime(str_replace('-', '/', $this->formatDateExcel($row['L21'])))),
            'time_in'  =>  $row['N21'],
            'time_out' =>  $row['O21'],
            'Hours' =>$row['P21'],
        ]);
    }
}
