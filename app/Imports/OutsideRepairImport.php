<?php

namespace App\Imports;
use App\OutsideRepairs;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToModel;
use DateTime;

use Maatwebsite\Excel\Concerns\WithMappedCells;
class OutsideRepairImport implements WithMappedCells,ToModel
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
            'O12'  => 'O12',
            'K13' => 'K13',
            'K14'  => 'K14',
            'M14' => 'M14',
            'O14'  => 'O14',
            'K15' => 'K15', 
            'J7'  => 'J7',

             'C13' => 'C13',
             'D13' => 'D13',
             'E13' => 'E13',
             'F13' => 'F13',
             'G13' => 'G13',
             'H13' => 'H13',
             'I13' => 'I13',
      ];
    }

       
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    
    public function model(array $row)
    {

        $messages = [
          //  'O12.required' => 'We need to know the Repair code for Outside repairs !',
            'K13.required' => 'We need to know the Company name for Outside repairs!',
            'K14.required' => 'We need to know the Invoice Number for Outside repairs !',
            'M14.required' => 'We need to know the Amount(Cost) for Outside repairs !',
            'O14.required' => 'We need to know the Job date for Outside repairs!',
            'K15.required' => 'We need to know the Repairs brief description for Outside repairs!',
            'J7.required' => 'We need to know the Fleet No for Outside repairs!',
            
        ];
        if( ($row['C13'] == null) && ($row['D13'] == null) && ($row[ 'E13'] == null) && ($row['F13'] == null) && ($row['G13'] == null) && ($row['H13'] == null) && ($row['I13'] == null))
     {
        Validator::make($row,[
          //  'O12' => 'required', 
            'K13' => 'required',
            'K14' => 'required',
            'M14' => 'required',
            'O14' => 'required',
            'K15' => 'required',
            'J7' => 'required',
            ],$messages)->validate();
        }
        //dd(DateTime::createFromFormat('d/m/Y', $row['O14'])->format('Y-m-d'));
        if( ($row['C13'] == null) && ($row['D13'] == null) && ($row[ 'E13'] == null) && ($row['F13'] == null) && ($row['G13'] == null) && ($row['H13'] == null) && ($row['I13'] == null))
        {
            return new OutsideRepairs([
                'company_name'  => $row['K13'],
                'invoice_no' => $row['K14'],
                'amount' => $row['M14'],
                'date_of_repair' => DateTime::createFromFormat('d/m/Y', $row['O14'])->format('Y-m-d'),
                'repairs_brief_description'  => $row['K15'],
                'repair_code' => $row['O12'],
                'job_cards' => $row[ 'J7'],

            ]);
        
            }
            

            if( ($row['C13'] != null) && ($row['D13'] != null) && ($row[ 'E13'] != null) && ($row['F13'] != null) && ($row['G13'] != null) && ($row['H13'] != null) && ($row['I13'] != null))
            {
                return new OutsideRepairs([
                    'company_name'  => 0,
                    'invoice_no' => 0,
                    'amount' => 0,
                    'date_of_repair' => DateTime::createFromFormat('d/m/Y', $row['O14'])->format('Y-m-d'),
                    'repairs_brief_description'  => 0,
                    'repair_code' => 0,
                    'job_cards' => $row[ 'J7'],
    
                ]);
            
                }
      
    } 

    
   /**
     * @return int
     */
   // public function startRow(): int
   //{
        //return 12;
   // }

    
    
}


