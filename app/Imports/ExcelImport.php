<?php

namespace App\Imports;
use App\PartWorkedOn;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToModel;
use DateTime;

use Maatwebsite\Excel\Concerns\WithMappedCells;
class ExcelImport implements WithMappedCells,ToModel
{


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
            'C13.required' => 'We need to know the Date the repair was perfomed in row 13!',
            'D13.required' => 'We need to know the repair code in row 13!',
            'E13.required' => 'We need to know the Description of the Part worked on in row 13!',
            'F13.required' => 'We need to know the Part or Serial Number in row 13!',
            'G13.required' => 'We need to know the Quantity in row 13 !',
            'H13.required' => 'We need to know the Unit Price in row 13!',
            
        ];
        
        Validator::make($row,[
            'C13' => 'required', 
            'D13' => 'required',
            'E13' => 'required',
            'F13' => 'required',
            'G13' => 'required',
            'H13' => 'required',
            ],$messages)->validate();

        return new PartWorkedOn([
            'job_date'  => DateTime::createFromFormat('d-m-Y', $row['C13'])->format('Y-m-d'),
            'repair_code' => $row['D13'],
            'description' =>  $row[ 'E13'],
            'part_no'  => $row['F13'],
            'quantity'  => $row['G13'],
            'unit_price' => $row['H13'],
            'job_cards' => $row[ 'J7'],
            'cost' => $row['P21'] * 1200,
            'outside_cost' => $row['M14'] + 0,
        ]);
        
        
      
    } 

   /**
     * @return int
     */
   // public function startRow(): int
   //{
        //return 12;
   // }

    
    
}
