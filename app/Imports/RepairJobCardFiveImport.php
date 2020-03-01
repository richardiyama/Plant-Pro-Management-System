<?php

namespace App\Imports;

use App\RepairJobCard;
use Maatwebsite\Excel\Concerns\ToModel;
use DateTime;

use Maatwebsite\Excel\Concerns\WithMappedCells;

class RepairJobCardFiveImport implements ToModel,WithMappedCells
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
            'C17' => 'C17',
            'D17' => 'D17',
            'E17' => 'E17',
            'F17' => 'F17',
            'G17' => 'G17',
            'H17' => 'H17',
            'J7'  => 'J7',
            'P25' => 'P25',
            'M14' => 'M14',
             'O12'  => 'O12',
             'K13' => 'K13',
             'K14'  => 'K14',
             'M14' => 'M14',
             'O14'  => 'O14',
             'K15' => 'K15', 
             'J7'  => 'J7',

             'J25'  => 'J25',
             'K25' => 'K25',
             'L25'  => 'L25',
             'N25'  => 'N25',
             'O25' => 'O25',
             'P25' => 'P25',
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
            'job_date'  => date('Y-m-d', strtotime(str_replace('-', '/', $this->formatDateExcel($row['C17'])))),
            'repair_code' => $row['D17'],
            'description' =>  $row[ 'E17'],
            'part_no'  => $row['F17'],
            'quantity'  => $row['G17'],
            'unit_price' => $row['H17'],
            'cost' => $row['P25'] * 1200,
            'outside_cost' => $row['M14'] + 0,
            'technician_name'  => $row['J25'],
            'employee_number' => $row['K25'],
            'personnel_job_date' =>  date('Y-m-d', strtotime(str_replace('-', '/', $this->formatDateExcel($row['L25'])))),
            'time_in'  =>  $row['N25'],
            'time_out' =>  $row['O25'],
            'Hours' =>$row['P25'],
        ]);
    }
}
