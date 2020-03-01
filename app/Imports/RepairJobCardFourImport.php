<?php

namespace App\Imports;

use App\RepairJobCard;
use Maatwebsite\Excel\Concerns\ToModel;

use DateTime;

use Maatwebsite\Excel\Concerns\WithMappedCells;

class RepairJobCardFourImport implements ToModel,WithMappedCells
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
            'C16' => 'C16',
             'D16' => 'D16',
             'E16' => 'E16',
             'F16' => 'F16',
             'G16' => 'G16',
             'H16' => 'H16',
             'J7'  => 'J7',
             'P24' => 'P24',
             'M14' => 'M14',
             'O12'  => 'O12',
             'K13' => 'K13',
             'K14'  => 'K14',
             'M14' => 'M14',
             'O14'  => 'O14',
             'K15' => 'K15', 
             'J7'  => 'J7',

             'J24'  => 'J24',
             'K24' => 'K24',
             'L24'  => 'L24',
             'N24'  => 'N24',
             'O24' => 'O24',
             'P24' => 'P24',
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
            'job_date'  => date('Y-m-d', strtotime(str_replace('-', '/', $this->formatDateExcel($row['C16'])))),
              'repair_code' => $row['D16'],
              'description' =>  $row[ 'E16'],
              'part_no'  => $row['F16'],
              'quantity'  => $row['G16'],
              'unit_price' => $row['H16'],
              'cost' => $row['P24'] * 1200,
              'outside_cost' => $row['M14'] + 0,
              'technician_name'  => $row['J24'],
              'employee_number' => $row['K24'],
              'personnel_job_date' =>  date('Y-m-d', strtotime(str_replace('-', '/', $this->formatDateExcel($row['L24'])))),
              'time_in'  =>  $row['N24'],
              'time_out' =>  $row['O24'],
              'Hours' =>$row['P24'],
        ]);
    }
}
