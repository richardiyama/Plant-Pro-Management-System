<?php

namespace App\Imports;

use App\RepairJobCard;
use Maatwebsite\Excel\Concerns\ToModel;

use DateTime;

use Maatwebsite\Excel\Concerns\WithMappedCells;

class RepairJobCardEightImport implements ToModel,WithMappedCells
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
            'C20' => 'C20',
            'D20' => 'D20',
            'E20' => 'E20',
            'F20' => 'F20',
            'G20' => 'G20',
            'H20' => 'H20',
            'J7'  => 'J7',
            'P28' => 'P28',
            'M14' => 'M14',
             'O12'  => 'O12',
             'K13' => 'K13',
             'K14'  => 'K14',
             'M14' => 'M14',
             'O14'  => 'O14',
             'K15' => 'K15', 
             'J7'  => 'J7',

             'J28'  => 'J28',
             'K28' => 'K28',
             'L28'  => 'L28',
             'N28'  => 'N28',
             'O28' => 'O28',
             'P28' => 'P28',
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
            'job_date'  => date('Y-m-d', strtotime(str_replace('-', '/', $this->formatDateExcel($row['C20'])))),
            'repair_code' => $row['D20'],
            'description' =>  $row[ 'E20'],
            'part_no'  => $row['F20'],
            'quantity'  => $row['G20'],
            'unit_price' => $row['H20'],
            'cost' => $row['P28'] * 1200,
            'outside_cost' => $row['M14'] + 0,
            'technician_name'  => $row['J28'],
            'employee_number' => $row['K28'],
            'personnel_job_date' =>  date('Y-m-d', strtotime(str_replace('-', '/', $this->formatDateExcel($row['L28'])))),
            'time_in'  =>  $row['N28'],
            'time_out' =>  $row['O28'],
            'Hours' =>$row['P28'],
        ]);
    }
}
