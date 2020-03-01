<?php

namespace App\Imports;
use App\JobCard;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToModel;

use DateTime;
use Maatwebsite\Excel\Concerns\WithMappedCells;
class JobCardMaster implements WithMappedCells,ToModel
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
            'D7'  => 'D7',
            'C8' => 'C8',
            'F8'  => 'F8',
            'J7' => 'J7',
            'M4'  => 'M4',
            'J9' => 'J9',
            'J10' => 'J10',
            'J11' => 'J11',
           

            
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
            'D7.required' => 'We need to know the Sending Area!',
            'C8.required' => 'We need to know the Date in!',
            'F8.required' => 'We need to know the Date out!',
            'J7.required' => 'We need to know the Fleet No!',
            'M4.required' => 'We need to know the Plant Cost Center!',
            'J9.required' => 'We need to know the Make!',
            'J10.required' => 'We need to know the Model!',
            //'J11.required' => 'We need to know the Km/HR Meter reading!',
            
        ];
        
       // Validator::make($row,[
           // 'D7' => 'required', 
           // 'C8' => 'required',
          // 'F8' => 'required',
          //  'J7' => 'required',
           // 'M4' => 'required',
          //  'J9' => 'required',
          //  'J10' => 'required',
            //'J11' => 'required',
            //'O33' => 'required',
            //'O34' => 'required',
            //'O35' => 'required',
            //'O36' => 'required',
           
           // ],$messages)->validate();

            return new JobCard([
                'sending_area'  => $row['D7'],
                'date_in' =>  date('Y-m-d', strtotime(str_replace('-', '/', $this->formatDateExcel($row['C8'])))),
                'date_out'  =>date('Y-m-d', strtotime(str_replace('-', '/', $this->formatDateExcel($row['F8'])))),
                'fleet-no' => $row[ 'J7'],
                'plant_cost_center'  => $row['M4'],
                'make' => $row['J9'],
                'model' =>$row['J10'],
                'hr/km_reading'  =>$row[ 'J11'],

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
