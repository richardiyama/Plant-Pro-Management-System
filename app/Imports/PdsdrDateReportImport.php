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
          'P2' => 'P2',
          'D3' => 'D3',
          'C3' => 'C3',
          'N2' => 'N2',
          'O2' => 'O2',
          'B4' => 'B4',
          'C4' => 'C4',
        ];
   }



    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
         //dd($row);
         if($row['B4'] == "Location:" )
         {
          $splitRow = explode(' ', $row['N2'], 2);
          // dd(DateTime::createFromFormat('d/m/Y', $splitRow[1])->format('Y-m-d'));
         // dd($splitRow[1]);
            return new PdsdrDateReport([
                'date_entry'=> DateTime::createFromFormat('d/m/Y', $splitRow[1])->format('Y-m-d'),
              'location'=> $row['C4'],
          ]);
         }
       if(($row['N2'] != null) && ($row['N2'] != "Date:"))
       {

            $splitRow = explode(' ', $row['N2'], 2);
      // dd(DateTime::createFromFormat('d/m/Y', $splitRow[1])->format('Y-m-d'));
      
        return new PdsdrDateReport([
            'date_entry'=> DateTime::createFromFormat('d/m/Y', $splitRow[1])->format('Y-m-d'),
            'location'=> $row['C3'],
        ]);
       }
       if($row['N2'] == null)
       {
        return new PdsdrDateReport([
            'date_entry'=> \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['P2']),
            'location'=> $row['D3'],
        ]);
       }

       if($row['O2'] == "Date:")
       {
        return new PdsdrDateReport([
            'date_entry'=> \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['P2']),
            'location'=> $row['D3'],
        ]);
       }
       
      

       if($row['N2'] == "Date:")
       {
        return new PdsdrDateReport([
            'date_entry'=> \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['O2']),
            'location'=> $row['C3'],
        ]);
       }
    }
}
