<?php

namespace App\Imports;

use App\RepairJobCard;
use Maatwebsite\Excel\Concerns\ToModel;

use DateTime;

use Maatwebsite\Excel\Concerns\WithMappedCells;

class RepairJobCardSixImport implements ToModel,WithMappedCells
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
            'C18' => 'C18',
            'D18' => 'D18',
            'E18' => 'E18',
            'F18' => 'F18',
            'G18' => 'G18',
            'H18' => 'H18',
            'J7'  => 'J7',
            'P26' => 'P26',
            'M14' => 'M14',
             'O12'  => 'O12',
             'K13' => 'K13',
             'K14'  => 'K14',
             'M14' => 'M14',
             'O14'  => 'O14',
             'K15' => 'K15', 
             'J7'  => 'J7',

             'J26'  => 'J26',
             'K26' => 'K26',
             'L26'  => 'L26',
             'N26'  => 'N26',
             'O26' => 'O26',
             'P26' => 'P26',
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
            'job_date'  => date('Y-m-d', strtotime(str_replace('-', '/', $this->formatDateExcel($row['C18'])))),
            'repair_code' => $row['D18'],
            'description' =>  $row[ 'E18'],
            'part_no'  => $row['F18'],
            'quantity'  => $row['G18'],
            'unit_price' => $row['H18'],
            'cost' => $row['P26'] * 1200,
            'outside_cost' => $row['M14'] + 0,
            'technician_name'  => $row['J26'],
            'employee_number' => $row['K26'],
            'personnel_job_date' =>  date('Y-m-d', strtotime(str_replace('-', '/', $this->formatDateExcel($row['L26'])))),
            'time_in'  =>  $row['N26'],
            'time_out' =>  $row['O26'],
            'Hours' =>$row['P26'],
        ]);
    }
}
