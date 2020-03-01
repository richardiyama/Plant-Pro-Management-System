<?php

namespace App\Imports;

use App\PdsdrDateReport;
use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\WithMappedCells;
use DateTime;


class PdsdrDateReportImport implements ToModel,WithMappedCells
{



    protected function formatDateExcel($date){ 
        if (gettype($date) === 'double')
       {
      $birthday = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($date); 
     return $birthday->format('n/j/Y');
         } 
     return $date;
         }


    public function mapping(): array
   {
      return [
          'C3' => 'C3',
          'N2' => 'N2',
           
        ];
   }



    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        $splitRow = explode(' ', $row['N2'], 2);
       // dd(DateTime::createFromFormat('d/m/Y', $splitRow[1])->format('Y-m-d'));
        return new PdsdrDateReport([
            'date_entry'=> DateTime::createFromFormat('d/m/Y', $splitRow[1])->format('Y-m-d'),
            'location'=> $row['C3'],
        ]);
    }
}
