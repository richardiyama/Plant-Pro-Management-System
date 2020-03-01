<?php

namespace App\Imports;

use App\RepairJobCard;
use Maatwebsite\Excel\Concerns\ToModel;

use DateTime;

use Maatwebsite\Excel\Concerns\WithMappedCells;

class RepairJobCardTwoImport implements ToModel,WithMappedCells
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
            'C14' => 'C14',
            'D14' => 'D14',
            'E14' => 'E14',
            'F14' => 'F14',
            'G14' => 'G14',
            'H14' => 'H14',
            'J7'  => 'J7',
            'P22' => 'P22',
            'M14' => 'M14',
             'J7'  => 'J7',
             'P22' => 'P22',
             'M14' => 'M14',
             'O12'  => 'O12',
             'K13' => 'K13',
             'K14'  => 'K14',
             'M14' => 'M14',
             'O14'  => 'O14',
             'K15' => 'K15', 
             'J7'  => 'J7',

             'J22'  => 'J22',
             'K22' => 'K22',
             'L22'  => 'L22',
             'N22'  => 'N22',
             'O22' => 'O22',
             'P22' => 'P22',
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
            'job_date'  => date('Y-m-d', strtotime(str_replace('-', '/', $this->formatDateExcel($row['C14'])))),
              'repair_code' => $row['D14'],
              'description' =>  $row[ 'E14'],
              'part_no'  => $row['F14'],
              'quantity'  => $row['G14'],
              'unit_price' => $row['H14'],
              'cost' => $row['P22'] * 1200,
              'outside_cost' => $row['M14'] + 0,
              'technician_name'  => $row['J22'],
              'employee_number' => $row['K22'],
              'personnel_job_date' => date('Y-m-d', strtotime(str_replace('-', '/', $this->formatDateExcel($row['L22'])))),
              'time_in'  =>  $row['N22'],
              'time_out' =>  $row['O22'],
              'Hours' =>$row['P22'],
        ]);
    }
}
