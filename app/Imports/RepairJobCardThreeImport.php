<?php

namespace App\Imports;

use App\RepairJobCard;
use Maatwebsite\Excel\Concerns\ToModel;

use DateTime;

use Maatwebsite\Excel\Concerns\WithMappedCells;

class RepairJobCardThreeImport implements ToModel,WithMappedCells
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
            'C15' => 'C15',
            'D15' => 'D15',
            'E15' => 'E15',
            'F15' => 'F15',
            'G15' => 'G15',
            'H15' => 'H15',
            'J7'  => 'J7',
            'P23' => 'P23',
            'M14' => 'M14',
             'O12'  => 'O12',
             'K13' => 'K13',
             'K14'  => 'K14',
             'M14' => 'M14',
             'O14'  => 'O14',
             'K15' => 'K15', 
             'J7'  => 'J7',

             'J23'  => 'J23',
             'K23' => 'K23',
             'L23'  => 'L23',
             'N23'  => 'N23',
             'O23' => 'O23',
             'P23' => 'P23',
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
            'job_date'  => date('Y-m-d', strtotime(str_replace('-', '/', $this->formatDateExcel($row['C15'])))),
            'repair_code' => $row['D15'],
            'description' =>  $row[ 'E15'],
            'part_no'  => $row['F15'],
            'quantity'  => $row['G15'],
            'unit_price' => $row['H15'],
            'cost' => $row['P23'] * 1200,
            'outside_cost' => $row['M14'] + 0,
              'technician_name'  => $row['J23'],
                'employee_number' => $row['K23'],
                'personnel_job_date' => date('Y-m-d', strtotime(str_replace('-', '/', $this->formatDateExcel($row['L23'])))),
                'time_in'  =>  $row['N23'],
                'time_out' =>  $row['O23'],
                'Hours' =>$row['P23'],
        ]);
    }
}
