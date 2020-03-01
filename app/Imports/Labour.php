<?php

namespace App\Imports;
use App\Personnel;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToModel;
use DateTime;


use Maatwebsite\Excel\Concerns\WithMappedCells;
class Labour implements WithMappedCells,ToModel
{


    public function mapping(): array
    {
        return [
            'J21'  => 'J21',
            'K21' => 'K21',
            'L21'  => 'L21',
            'M21' => 'M21',
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

        $messages = [
            'J21.required' => 'We need to know the Technician name!',
            'K21.required' => 'We need to know the Employee number!',
            'L21.required' => 'We need to know the Job date!',
            'M21.required' => 'We need to know the Repair code!',
            'N21.required' => 'We need to know the Time in!',
            'O21.required' => 'We need to know the Time out!',
            'P21.required' => 'We need to know the Hours!',
            'J7.required' => 'We need to know the Fleet No!',
            
        ];
        
        Validator::make($row,[
            'J21' => 'required', 
            //'K21' => 'required',
            'L21' => 'required',
            'M21' => 'required',
            'N21' => 'required',
            'O21' => 'required',
            'P21' => 'required',
            'J7' => 'required',
            ],$messages)->validate();

            return new Personnel([
                'technician_name'  => $row['J21'],
                'employee_number' => $row['K21'],
                'job_date' =>  DateTime::createFromFormat('d-m-Y', $row['L21'])->format('Y-m-d'),
                'repair_code' =>$row['M21'],
                'time_in'  =>  $row['N21'],
                'time_out' =>  $row['O21'],
                'Hours' =>$row['P21'],
                'job_cards' => $row[ 'J7'],

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
