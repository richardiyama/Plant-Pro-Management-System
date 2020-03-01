<?php

namespace App\Imports;

use App\PartWorkedOn;
//use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToModel;
//use Maatwebsite\Excel\Concerns\ToCollection;
use DateTime;
use Maatwebsite\Excel\Concerns\WithMappedCells;
//use Maatwebsite\Excel\Concerns\Importable;

class RowTwentyThree implements WithMappedCells,ToModel
{
   // use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function mapping(): array
    {
        return [
             'C23' => 'C23',
             'D23' => 'D23',
             'E23' => 'E23',
             'F23' => 'F23',
             'G23' => 'G23',
             'H23' => 'H23',
             'J7'  => 'J7',
             'M14' => 'M14',
             
             
      ];
    }

    
    public function model(array $row)
    {
      $messages = [
        'C23.required' => 'We need to know the Date the repair was perfomed in row 23!',
        'D23.required' => 'We need to know the repair code in row 23!',
        'E23.required' => 'We need to know the Description of the Part worked on in row 23!',
        'F23.required' => 'We need to know the Part or Serial Number in row 23!',
        'G23.required' => 'We need to know the Quantity in row 23 !',
        'H23.required' => 'We need to know the Unit Price in row 23!',
    ];

     if( ($row['C23'] !=null) && ($row['D23'] == null) && ($row[ 'E23'] != null) && ($row['F23'] == null) && ($row['G23'] != null) && ($row['H23'] == null))
     {
       Validator::make($row, [
       'D23' => 'required',
       'F23' => 'required',
       'H23' => 'required',
       ],$messages)->validate();
      }

      if( ($row['C23'] !=null) && ($row['D23'] == null) && ($row[ 'E23'] != null) && ($row['F23'] == null) && ($row['G23'] != null) && ($row['H23'] != null))
      {
        Validator::make($row, [
        'D23' => 'required',
        'F23' => 'required',
        ],$messages)->validate();
       }

      if( ($row['C23'] !=null) && ($row['D23'] == null) && ($row[ 'E23'] == null) && ($row['F23'] == null) && ($row['G23'] != null) && ($row['H23'] != null))
     {
       Validator::make($row, [
       'D23' => 'required',
       'E23' => 'required',
       'F23' => 'required',
       ],$messages)->validate();
      }


      if( ($row['C23'] !=null) && ($row['D23'] == null) && ($row[ 'E23'] == null) && ($row['F23'] == null) && ($row['G23'] != null) && ($row['H23'] != null))
      {
        Validator::make($row, [
        'D23' => 'required',
        'E23' => 'required',
        'F23' => 'required',
        ],$messages)->validate();
       }

      if( ($row['C23'] !=null) && ($row['D23'] == null) && ($row[ 'E23'] == null) && ($row['F23'] != null) && ($row['G23'] != null) && ($row['H23'] != null))
      {
        Validator::make($row, [
        'D23' => 'required',
        'E23' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C23'] !=null) && ($row['D23'] == null) && ($row[ 'E23'] != null) && ($row['F23'] == null) && ($row['G23'] != null) && ($row['H23'] != null))
      {
        Validator::make($row, [
        'D23' => 'required',
        'F23' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C23'] !=null) && ($row['D23'] == null) && ($row[ 'E23'] != null) && ($row['F23'] != null) && ($row['G23'] != null) && ($row['H23'] != null))
       {
         Validator::make($row, [
         'D23' => 'required',
         ],$messages)->validate();
        }
 

       if( ($row['C23'] !=null) && ($row['D23'] == null) && ($row[ 'E23'] == null) && ($row['F23'] != null) && ($row['G23'] == null) && ($row['H23'] != null))
       {
         Validator::make($row, [
         'D23' => 'required',
         'F23' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C23'] ==null) && ($row['D23'] == null) && ($row[ 'E23'] == null) && ($row['F23'] != null) && ($row['G23'] == null) && ($row['H23'] != null))
        {
          Validator::make($row,[
          'C23' => 'required', 
          'D23' => 'required',
          'E23' => 'required',
          'G23' => 'required',
          ],$messages)->validate();
         }

        if( ($row['C23'] !=null) && ($row['D23'] == null) && ($row[ 'E23'] == null) && ($row['F23'] != null) && ($row['G23'] != null) && ($row['H23'] != null))
        {
          Validator::make($row,[
          'D23' => 'required',
          'F23' => 'required',
          ],$messages)->validate();
         }
 

       if( ($row['C23'] !=null) && ($row['D23'] != null) && ($row[ 'E23'] == null) && ($row['F23'] == null) && ($row['G23'] != null) && ($row['H23'] != null))
       {
         Validator::make($row, [
         'E23' => 'required',
         'F23' => 'required',
         ],$messages)->validate();
        }


      if( ($row['C23'] !=null) && ($row['D23'] == null) && ($row[ 'E23'] == null) && ($row['F23'] == null) && ($row['G23'] != null) && ($row['H23'] == null))
      {
        Validator::make($row,[
        'D23' => 'required',
        'E23' => 'required',
        'F23' => 'required',
        'H23' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C23'] !=null) && ($row['D23'] != null) && ($row[ 'E23'] == null) && ($row['F23'] == null) && ($row['G23'] != null) && ($row['H23'] == null))
       {
         Validator::make($row,[
         'E23' => 'required',
         'F23' => 'required',
         'H23' => 'required',
         ],$messages)->validate();
        }

      if( ($row['C23'] !=null) && ($row['D23'] == null) && ($row[ 'E23'] == null) && ($row['F23'] == null) && ($row['G23'] == null) && ($row['H23'] == null))
     {
       Validator::make($row, [
       'D23' => 'required',
       'E23' => 'required',
       'F23' => 'required',
       'G23' => 'required',
       'H23' => 'required',
       ],$messages)->validate();
      }

      if( ($row['C23'] ==null) && ($row['D23'] != null) && ($row[ 'E23'] == null) && ($row['F23'] == null) && ($row['G23'] == null) && ($row['H23'] != null))
      {
        Validator::make($row,[
        'C23' => 'required',
        'E23' => 'required',
        'F23' => 'required',
        'G23' => 'required',
        ],$messages)->validate();
       }


       if( ($row['C23'] ==null) && ($row['D23'] != null) && ($row[ 'E23'] == null) && ($row['F23'] == null) && ($row['G23'] != null) && ($row['H23'] != null))
       {
         Validator::make($row,[
         'C23' => 'required',
         'E23' => 'required',
         'F23' => 'required',
         ],$messages)->validate();
        }
    
      if( ($row['C23'] == null) && ($row['D23'] != null) && ($row[ 'E23'] == null) && ($row['F23'] == null) && ($row['G23'] == null) && ($row['H23'] == null))
      {
        Validator::make($row,[
        'C23' => 'required',
        'E23' => 'required',
        'F23' => 'required',
        'G23' => 'required',
        'H23' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C23'] == null) && ($row['D23'] == null) && ($row[ 'E23'] != null) && ($row['F23'] == null) && ($row['G23'] == null) && ($row['H23'] == null))
      {
        Validator::make($row,[
        'C23' => 'required',
        'D23' => 'required',
        'F23' => 'required',
        'G23' => 'required',
        'H23' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C23'] == null) && ($row['D23'] == null) && ($row[ 'E23'] == null) && ($row['F23'] != null) && ($row['G23'] == null) && ($row['H23'] == null))
       {
         Validator::make($row, [
         'C23' => 'required',
         'D23' => 'required',
         'E23' => 'required',
         'G23' => 'required',
         'H23' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C23'] == null) && ($row['D23'] == null) && ($row[ 'E23'] == null) && ($row['F23'] == null) && ($row['G23'] != null) && ($row['H23'] == null))
        {
          Validator::make($row, [
          'C23' => 'required',
          'D23' => 'required',
          'E23' => 'required',
          'F23' => 'required',
          'H23' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C23'] == null) && ($row['D23'] != null) && ($row[ 'E23'] == null) && ($row['F23'] == null) && ($row['G23'] != null) && ($row['H23'] == null))
         {
           Validator::make($row, [
           'C23' => 'required',
           'E23' => 'required',
           'F23' => 'required',
           'H23' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C23'] == null) && ($row['D23'] != null) && ($row[ 'E23'] == null) && ($row['F23'] == null) && ($row['G23'] != null) && ($row['H23'] == null))
         {
           Validator::make($row,[
           'C23' => 'required',
           'E23' => 'required',
           'F23' => 'required',
           'H23' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C23'] == null) && ($row['D23'] != null) && ($row[ 'E23'] == null) && ($row['F23'] != null) && ($row['G23'] != null) && ($row['H23'] == null))
          {
            Validator::make($row,[
            'C23' => 'required',
            'E23' => 'required',
            'H23' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C23'] == null) && ($row['D23'] != null) && ($row[ 'E23'] == null) && ($row['F23'] != null) && ($row['G23'] == null) && ($row['H23'] == null))
          {
            Validator::make($row,[
            'C23' => 'required',
            'E23' => 'required',
            'G23' => 'required',
            'H23' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C23'] == null) && ($row['D23'] != null) && ($row[ 'E23'] == null) && ($row['F23'] != null) && ($row['G23'] == null) && ($row['H23'] != null))
           {
             Validator::make($row, [
             'C23' => 'required',
             'E23' => 'required',
             'G23' => 'required',
             ],$messages)->validate();
            }

         if( ($row['C23'] != null) && ($row['D23'] == null) && ($row[ 'E23'] == null) && ($row['F23'] == null) && ($row['G23'] != null) && ($row['H23'] == null))
        {
          Validator::make($row,[
          'D23' => 'required',
          'E23' => 'required',
          'F23' => 'required',
          'H23' => 'required',
          ],$messages)->validate();
         }
         
         if( ($row['C23'] != null) && ($row['D23'] != null) && ($row[ 'E23'] == null) && ($row['F23'] != null) && ($row['G23'] == null) && ($row['H23'] != null))
         {
           Validator::make($row, [
           'E23' => 'required',
           'G23' => 'required',
           ],$messages)->validate();
          }

         if( ($row['C23'] != null) && ($row['D23'] != null) && ($row[ 'E23'] == null) && ($row['F23'] == null) && ($row['G23'] != null) && ($row['H23'] == null))
         {
           Validator::make($row, [
           'E23' => 'required',
           'F23' => 'required',
           'H23' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C23'] != null) && ($row['D23'] == null) && ($row[ 'E23'] == null) && ($row['F23'] != null) && ($row['G23'] == null) && ($row['H23'] == null))
          {
            Validator::make($row,[
              'D23' => 'required',
              'E23' => 'required',
              'G23' => 'required',
              'H23' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C23'] != null) && ($row['D23'] != null) && ($row[ 'E23'] == null) && ($row['F23'] != null) && ($row['G23'] == null) && ($row['H23'] == null))
           {
             Validator::make($row, [
               'E23' => 'required',
               'G23' => 'required',
               'H23' => 'required',
             ],$messages)->validate();
            }

          
          
          

         if( ($row['C23'] == null) && ($row['D23'] == null) && ($row[ 'E23'] == null) && ($row['F23'] == null) && ($row['G23'] == null) && ($row['H23'] != null))
         {
           Validator::make($row,[
           'C23' => 'required',
           'D23' => 'required',
           'E23' => 'required',
           'F23' => 'required',
           'G23' => 'required',
           ],$messages)->validate();
          }

        

          if( ($row['C23'] != null) && ($row['D23'] == null) && ($row[ 'E23'] == null) && ($row['F23'] == null) && ($row['G23'] == null) && ($row['H23'] == null))
          {
            Validator::make($row,[
            'D23' => 'required',
            'E23' => 'required',
            'F23' => 'required',
            'G23' => 'required',
            'H23' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C23'] != null) && ($row['D23'] == null) && ($row[ 'E23'] == null) && ($row['F23'] == null) && ($row['G23'] == null) && ($row['H23'] != null))
           {
             Validator::make($row,[
             'D23' => 'required',
             'E23' => 'required',
             'F23' => 'required',
             'G23' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C23'] != null) && ($row['D23'] != null) && ($row[ 'E23'] == null) && ($row['F23'] == null) && ($row['G23'] == null) && ($row['H23'] != null) )
            {
              Validator::make($row, [
              'E23' => 'required',
              'F23' => 'required',
              'G23' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C23'] != null) && ($row['D23'] != null) && ($row[ 'E23'] != null) && ($row['F23'] == null) && ($row['G23'] == null) && ($row['H23'] != null))
            {
              Validator::make($row, [
              'F23' => 'required',
              'G23' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C23'] != null) && ($row['D23'] != null) && ($row[ 'E23'] != null) && ($row['F23'] != null) && ($row['G23'] == null) && ($row['H23'] != null))
             {
               Validator::make($row,[
               'G23' => 'required',
               ],$messages)->validate();
              }

            

           if( ($row['C23'] != null) && ($row['D23'] != null) && ($row[ 'E23'] == null) && ($row['F23'] == null) && ($row['G23'] == null) && ($row['H23'] == null))
          {
            Validator::make($row,[
            'E23' => 'required',
            'F23' => 'required',
            'G23' => 'required',
            'H23' => 'required',
            ],$messages)->validate();
           }

           
           if( ($row['C23'] == null) && ($row['D23'] != null) && ($row[ 'E23'] == null) && ($row['F23'] == null) && ($row['G23'] == null) && ($row['H23'] != null))
          {
            Validator::make($row, [
            'C23' => 'required', 
            'E23' => 'required',
            'F23' => 'required',
            'G23' => 'required',
            ],$messages)->validate();
           }

           
          


           if( ($row['C23'] == null) && ($row['D23'] == null) && ($row[ 'E23'] == null) && ($row['F23'] != null) && ($row['G23'] == null) && ($row['H23'] == null))
           {
             Validator::make($row,[
             'C23' => 'required', 
             'D23' => 'required',
             'E23' => 'required',
             'G23' => 'required',
             'H23' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C23'] == null) && ($row['D23'] == null) && ($row[ 'E23'] != null) && ($row['F23'] == null) && ($row['G23'] == null) && ($row['H23'] == null))
            {
              Validator::make($row, [
              'C23' => 'required', 
              'D23' => 'required',
              'F23' => 'required',
              'G23' => 'required',
              'H23' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C23'] == null) && ($row['D23'] == null) && ($row[ 'E23'] != null) && ($row['F23'] == null) && ($row['G23'] != null) && ($row['H23'] == null))
             {
               Validator::make($row,[
               'C23' => 'required', 
               'D23' => 'required',
               'F23' => 'required',
               'H23' => 'required',
               ],$messages)->validate();
              }

              if( ($row['C23'] == null) && ($row['D23'] != null) && ($row[ 'E23'] != null) && ($row['F23'] == null) && ($row['G23'] == null) && ($row['H23'] == null))
             {
               Validator::make($row,[
               'C23' => 'required', 
               'F23' => 'required',
               'G23' => 'required',
               'H23' => 'required',
               ],$messages)->validate();
              }

             if( ($row['C23'] == null) && ($row['D23'] != null) && ($row[ 'E23'] == null) && ($row['F23'] != null) && ($row['G23'] == null) && ($row['H23'] == null))
            {
              Validator::make($row, [
              'C23' => 'required', 
              'G23' => 'required',
              'H23' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C23'] == null) && ($row['D23'] == null) && ($row[ 'E23'] != null) && ($row['F23'] == null) && ($row['G23'] == null) && ($row['H23'] != null))
             {
               Validator::make($row,[
               'C23' => 'required', 
               'D23' => 'required',
               'F23' => 'required',
               'G23' => 'required',
               ],$messages)->validate();
              }
 
             if( ($row['C23'] == null) && ($row['D23'] != null) && ($row[ 'E23'] == null) && ($row['F23'] == null) && ($row['G23'] == null) && ($row['H23'] == null))
            {
              Validator::make($row,[
              'C23' => 'required', 
              'E23' => 'required',
              'F23' => 'required',
              'G23' => 'required',
              'H23' => 'required',
              ],$messages)->validate();
             }

           if( ($row['C23'] != null) && ($row['D23'] != null) && ($row[ 'E23'] != null) && ($row['F23'] == null) && ($row['G23'] == null) && ($row['H23'] == null))
           {
             Validator::make($row, [
             'F23' => 'required',
             'G23' => 'required',
             'H23' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C23'] != null) && ($row['D23'] != null) && ($row[ 'E23'] != null) && ($row['F23'] != null) && ($row['G23'] == null) && ($row['H23'] == null))
           {
             Validator::make($row,[
             'G23' => 'required',
             'H23' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C23'] != null) && ($row['D23'] != null) && ($row[ 'E23'] != null) && ($row['F23'] != null) && ($row['G23'] != null) && ($row['H23'] == null))
            {
              Validator::make($row, [
              'H23' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C23'] == null) && ($row['D23'] == null) && ($row[ 'E23'] == null) && ($row['F23'] == null) && ($row['G23'] != null) && ($row['H23'] == null))
            {
              Validator::make($row,[
              'C23' => 'required',
              'D23' => 'required',
              'E23' => 'required',
              'F23' => 'required',
              'H23' => 'required',
              ],$messages)->validate();
             }

          if( ($row['C23'] == null) && ($row['D23'] == null) && ($row[ 'E23'] == null) && ($row['F23'] == null) && ($row['G23'] == null) && ($row['H23'] != null))
         {
           Validator::make($row, [
           'C23' => 'required',
           'D23' => 'required',
           'E23' => 'required',
           'F23' => 'required',
           'G23' => 'required',
           ],$messages)->validate();
          }
         if( ($row['C23'] == null) && ($row['D23'] == null) && ($row[ 'E23'] == null) && ($row['F23'] == null) && ($row['G23'] != null) && ($row['H23'] != null))
        {
          Validator::make($row, [
          'C23' => 'required',
          'D23' => 'required',
          'E23' => 'required',
          'F23' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C23'] == null) && ($row['D23'] == null) && ($row[ 'E23'] == null) && ($row['F23'] == null) && ($row['G23'] != null) && ($row['H23'] != null))
         {
           Validator::make($row,[
           'C23' => 'required',
           'D23' => 'required',
           'E23' => 'required',
           'F23' => 'required',
           ],$messages)->validate();
          }
 

        if( ($row['C23'] == null) && ($row['D23'] == null) && ($row[ 'E23'] == null) && ($row['F23'] != null) && ($row['G23'] != null) && ($row['H23'] == null))
        {
          Validator::make($row, [
          'C23' => 'required',
          'D23' => 'required',
          'E23' => 'required',
          'H23' => 'required',
          ],$messages)->validate();
         }


         if( ($row['C23'] == null) && ($row['D23'] == null) && ($row[ 'E23'] == null) && ($row['F23'] != null) && ($row['G23'] != null) && ($row['H23'] != null))
        {
          Validator::make($row, [
          'C23' => 'required',
          'D23' => 'required',
          'E23' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C23'] == null) && ($row['D23'] == null) && ($row[ 'E23'] == null) && ($row['F23'] != null) && ($row['G23'] != null) && ($row['H23'] != null))
         {
           Validator::make($row, [
           'C23' => 'required',
           'D23' => 'required',
           'E23' => 'required',
           ],$messages)->validate();
          }

       if( ($row['C23'] == null) && ($row['D23'] == null) && ($row[ 'E23'] != null) && ($row['F23'] != null) && ($row['G23'] == null) && ($row['H23'] == null))
       {
         Validator::make($row, [
         'C23' => 'required',
         'G23' => 'required',
         'H23' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C23'] == null) && ($row['D23'] == null) && ($row[ 'E23'] != null) && ($row['F23'] != null) && ($row['G23'] != null) && ($row['H23'] == null))
       {
         Validator::make($row,[
         'C23' => 'required',
         'D23' => 'required',
         'H23' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C23'] == null) && ($row['D23'] == null) && ($row[ 'E23'] != null) && ($row['F23'] != null) && ($row['G23'] != null) && ($row['H23'] != null))
        {
          Validator::make($row, [
          'C23' => 'required',
          'D23' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C23'] == null) && ($row['D23'] == null) && ($row[ 'E23'] != null) && ($row['F23'] != null) && ($row['G23'] != null) && ($row['H23'] != null))
        {
          Validator::make($row,[
          'C23' => 'required',
          'D23' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C23'] == null) && ($row['D23'] == null) && ($row[ 'E23'] != null) && ($row['F23'] != null) && ($row['G23'] != null) && ($row['H23'] != null))
        {
          Validator::make($row, [
          'C23' => 'required',
          'D23' => 'required',
          ],$messages)->validate();
         }

       if( ($row['C23'] == null) && ($row['D23'] != null) && ($row[ 'E23'] != null) && ($row['F23'] == null) && ($row['G23'] == null) && ($row['H23'] == null))
       {
         Validator::make($row,[
         'C23' => 'required',
         'F23' => 'required',
         'G23' => 'required',
         'H23' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C23'] == null) && ($row['D23'] != null) && ($row[ 'E23'] != null) && ($row['F23'] != null) && ($row['G23'] == null) && ($row['H23'] == null))
       {
         Validator::make($row, [
         'C23' => 'required',
         'G23' => 'required',
         'H23' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C23'] == null) && ($row['D23'] != null) && ($row[ 'E23'] != null) && ($row['F23'] != null) && ($row['G23'] != null) && ($row['H23'] == null))
        {
          Validator::make($row,[
          'C23' => 'required',
          'H23' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C23'] == null) && ($row['D23'] != null) && ($row[ 'E23'] != null) && ($row['F23'] != null) && ($row['G23'] != null) && ($row['H23'] != null))
         {
           Validator::make($row, [
           'C23' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C23'] == null) && ($row['D23'] != null) && ($row[ 'E23'] != null) && ($row['F23'] != null) && ($row['G23'] != null) && ($row['H23'] != null))
          {
            Validator::make($row,[
            'C23' => 'required',
            ],$messages)->validate();
           }
      
            if( ($row['C23']!=null) && ($row['D23'] != null) && ($row[ 'E23'] == null) && ($row['F23'] == null) && ($row['G23'] == null) && ($row['H23'] == null))
            {
              Validator::make($row, [
               'E23' => 'required',
                'F23' => 'required',
               'G23' => 'required',
               'H23' => 'required',
              ],$messages)->validate();
              }
        
              if( ($row['C23']!=null) && ($row['D23'] != null) && ($row[ 'E23'] != null) && ($row['F23'] == null) && ($row['G23'] == null) && ($row['H23'] == null))
              {
                Validator::make($row,[
                  'F23' => 'required',
                 'G23' => 'required',
                 'H23' => 'required',
                ],$messages)->validate();
                }

                if( ($row['C23']==null) && ($row['D23'] == null) && ($row[ 'E23'] == null) && ($row['F23'] != null) && ($row['G23'] == null) && ($row['H23'] == null))
              {
                Validator::make($row, [
                  'C23' => 'required',
                 'D23' => 'required',
                 'E23' => 'required',
                  'G23' => 'required',
                  'H23' => 'required',
                ],$messages)->validate();
                }
                if( ($row['C23']!=null) && ($row['D23'] != null) && ($row[ 'E23'] == null) && ($row['F23'] != null) && ($row['G23'] != null) && ($row['H23'] != null))
                {
                  Validator::make($row, [
                   'E23' => 'required',
                  ],$messages)->validate();
                  }

                  if( ($row['C23']!=null) && ($row['D23'] != null) && ($row[ 'E23'] != null) && ($row['F23'] != null) && ($row['G23'] == null) && ($row['H23'] != null))
                {
                  Validator::make($row, [
                   'G23' => 'required',
                  ],$messages)->validate();
                  }

                  
                  if( ($row['C23']!=null) && ($row['D23'] != null) && ($row[ 'E23'] != null) && ($row['F23'] == null) && ($row['G23'] != null) && ($row['H23'] != null))
                {
                  Validator::make($row, [
                   'F23' => 'required',
                  ],$messages)->validate();
                  }



                if( ($row['C23']!=null) && ($row['D23'] != null) && ($row[ 'E23'] != null) && ($row['F23'] != null) && ($row['G23'] == null) && ($row['H23'] == null))
              {
                Validator::make($row,[
                 'G23' => 'required',
                 'H23' => 'required',
                ],$messages)->validate();
                }

                if( ($row['C23']!=null) && ($row['D23'] != null) && ($row[ 'E23'] != null) && ($row['F23'] != null) && ($row['G23'] != null) && ($row['H23'] == null))
                {
                  Validator::make($row, [
                   'H23' => 'required',
                  ],$messages)->validate();
                  }

                 
                 
                  //$d2 = DateTime::createFromFormat('d-m-Y', $row['C23'])->format('Y-m-d')? "" : null;
                  // dd(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['C14'])? "" : null);

                   if($row['C23'] != null){
          return new PartWorkedOn([
             'job_date'  => DateTime::createFromFormat('d-m-Y', $row['C23'])->format('Y-m-d'),
              'repair_code' => $row['D23'],
              'description' =>  $row[ 'E23'],
              'part_no'  => $row['F23'],
              'quantity'  => $row['G23'],
              'unit_price' => $row['H23'],
              'job_cards' => $row[ 'J7'],
              'outside_cost' => $row['M14'] + 0,
            ]);
           
           }
    }

 
}
