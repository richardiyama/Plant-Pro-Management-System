<?php

namespace App\Imports;

use App\PartWorkedOn;
//use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToModel;
//use Maatwebsite\Excel\Concerns\ToCollection;

use Maatwebsite\Excel\Concerns\WithMappedCells;
//use Maatwebsite\Excel\Concerns\Importable;
use DateTime;
class RowSixteen implements WithMappedCells,ToModel
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
             'C16' => 'C16',
             'D16' => 'D16',
             'E16' => 'E16',
             'F16' => 'F16',
             'G16' => 'G16',
             'H16' => 'H16',
             'J7'  => 'J7',
             'P24' => 'P24',
             'M14' => 'M14',
             
             
      ];
    }

    
    public function model(array $row)
    {
      $messages = [
        'C16.required' => 'We need to know the Date the repair was perfomed in row 16!',
        'D16.required' => 'We need to know the repair code in row 16!',
        'E16.required' => 'We need to know the Description of the Part worked on in row 16!',
        'F16.required' => 'We need to know the Part or Serial Number in row 16!',
        'G16.required' => 'We need to know the Quantity in row 16 !',
        'H16.required' => 'We need to know the Unit Price in row 16!',
    ];

     if( ($row['C16'] !=null) && ($row['D16'] == null) && ($row[ 'E16'] != null) && ($row['F16'] == null) && ($row['G16'] != null) && ($row['H16'] == null))
     {
       Validator::make($row, [
       'D16' => 'required',
       'F16' => 'required',
       'H16' => 'required',
       ],$messages)->validate();
      }

      if( ($row['C16'] !=null) && ($row['D16'] == null) && ($row[ 'E16'] != null) && ($row['F16'] == null) && ($row['G16'] != null) && ($row['H16'] != null))
      {
        Validator::make($row, [
        'D16' => 'required',
        'F16' => 'required',
        ],$messages)->validate();
       }

      if( ($row['C16'] !=null) && ($row['D16'] == null) && ($row[ 'E16'] == null) && ($row['F16'] == null) && ($row['G16'] != null) && ($row['H16'] != null))
     {
       Validator::make($row, [
       'D16' => 'required',
       'E16' => 'required',
       'F16' => 'required',
       ],$messages)->validate();
      }


      if( ($row['C16'] !=null) && ($row['D16'] == null) && ($row[ 'E16'] == null) && ($row['F16'] == null) && ($row['G16'] != null) && ($row['H16'] != null))
      {
        Validator::make($row, [
        'D16' => 'required',
        'E16' => 'required',
        'F16' => 'required',
        ],$messages)->validate();
       }

      if( ($row['C16'] !=null) && ($row['D16'] == null) && ($row[ 'E16'] == null) && ($row['F16'] != null) && ($row['G16'] != null) && ($row['H16'] != null))
      {
        Validator::make($row, [
        'D16' => 'required',
        'E16' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C16'] !=null) && ($row['D16'] == null) && ($row[ 'E16'] != null) && ($row['F16'] == null) && ($row['G16'] != null) && ($row['H16'] != null))
      {
        Validator::make($row, [
        'D16' => 'required',
        'F16' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C16'] !=null) && ($row['D16'] == null) && ($row[ 'E16'] != null) && ($row['F16'] != null) && ($row['G16'] != null) && ($row['H16'] != null))
       {
         Validator::make($row, [
         'D16' => 'required',
         ],$messages)->validate();
        }
 

       if( ($row['C16'] !=null) && ($row['D16'] == null) && ($row[ 'E16'] == null) && ($row['F16'] != null) && ($row['G16'] == null) && ($row['H16'] != null))
       {
         Validator::make($row, [
         'D16' => 'required',
         'F16' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C16'] ==null) && ($row['D16'] == null) && ($row[ 'E16'] == null) && ($row['F16'] != null) && ($row['G16'] == null) && ($row['H16'] != null))
        {
          Validator::make($row,[
          'C16' => 'required', 
          'D16' => 'required',
          'E16' => 'required',
          'G16' => 'required',
          ],$messages)->validate();
         }

        if( ($row['C16'] !=null) && ($row['D16'] == null) && ($row[ 'E16'] == null) && ($row['F16'] != null) && ($row['G16'] != null) && ($row['H16'] != null))
        {
          Validator::make($row,[
          'D16' => 'required',
          'F16' => 'required',
          ],$messages)->validate();
         }
 

       if( ($row['C16'] !=null) && ($row['D16'] != null) && ($row[ 'E16'] == null) && ($row['F16'] == null) && ($row['G16'] != null) && ($row['H16'] != null))
       {
         Validator::make($row, [
         'E16' => 'required',
         'F16' => 'required',
         ],$messages)->validate();
        }


      if( ($row['C16'] !=null) && ($row['D16'] == null) && ($row[ 'E16'] == null) && ($row['F16'] == null) && ($row['G16'] != null) && ($row['H16'] == null))
      {
        Validator::make($row,[
        'D16' => 'required',
        'E16' => 'required',
        'F16' => 'required',
        'H16' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C16'] !=null) && ($row['D16'] != null) && ($row[ 'E16'] == null) && ($row['F16'] == null) && ($row['G16'] != null) && ($row['H16'] == null))
       {
         Validator::make($row,[
         'E16' => 'required',
         'F16' => 'required',
         'H16' => 'required',
         ],$messages)->validate();
        }

      if( ($row['C16'] !=null) && ($row['D16'] == null) && ($row[ 'E16'] == null) && ($row['F16'] == null) && ($row['G16'] == null) && ($row['H16'] == null))
     {
       Validator::make($row, [
       'D16' => 'required',
       'E16' => 'required',
       'F16' => 'required',
       'G16' => 'required',
       'H16' => 'required',
       ],$messages)->validate();
      }

      if( ($row['C16'] ==null) && ($row['D16'] != null) && ($row[ 'E16'] == null) && ($row['F16'] == null) && ($row['G16'] == null) && ($row['H16'] != null))
      {
        Validator::make($row,[
        'C16' => 'required',
        'E16' => 'required',
        'F16' => 'required',
        'G16' => 'required',
        ],$messages)->validate();
       }


       if( ($row['C16'] ==null) && ($row['D16'] != null) && ($row[ 'E16'] == null) && ($row['F16'] == null) && ($row['G16'] != null) && ($row['H16'] != null))
       {
         Validator::make($row,[
         'C16' => 'required',
         'E16' => 'required',
         'F16' => 'required',
         ],$messages)->validate();
        }
    
      if( ($row['C16'] == null) && ($row['D16'] != null) && ($row[ 'E16'] == null) && ($row['F16'] == null) && ($row['G16'] == null) && ($row['H16'] == null))
      {
        Validator::make($row,[
        'C16' => 'required',
        'E16' => 'required',
        'F16' => 'required',
        'G16' => 'required',
        'H16' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C16'] == null) && ($row['D16'] == null) && ($row[ 'E16'] != null) && ($row['F16'] == null) && ($row['G16'] == null) && ($row['H16'] == null))
      {
        Validator::make($row,[
        'C16' => 'required',
        'D16' => 'required',
        'F16' => 'required',
        'G16' => 'required',
        'H16' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C16'] == null) && ($row['D16'] == null) && ($row[ 'E16'] == null) && ($row['F16'] != null) && ($row['G16'] == null) && ($row['H16'] == null))
       {
         Validator::make($row, [
         'C16' => 'required',
         'D16' => 'required',
         'E16' => 'required',
         'G16' => 'required',
         'H16' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C16'] == null) && ($row['D16'] == null) && ($row[ 'E16'] == null) && ($row['F16'] == null) && ($row['G16'] != null) && ($row['H16'] == null))
        {
          Validator::make($row, [
          'C16' => 'required',
          'D16' => 'required',
          'E16' => 'required',
          'F16' => 'required',
          'H16' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C16'] == null) && ($row['D16'] != null) && ($row[ 'E16'] == null) && ($row['F16'] == null) && ($row['G16'] != null) && ($row['H16'] == null))
         {
           Validator::make($row, [
           'C16' => 'required',
           'E16' => 'required',
           'F16' => 'required',
           'H16' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C16'] == null) && ($row['D16'] != null) && ($row[ 'E16'] == null) && ($row['F16'] == null) && ($row['G16'] != null) && ($row['H16'] == null))
         {
           Validator::make($row,[
           'C16' => 'required',
           'E16' => 'required',
           'F16' => 'required',
           'H16' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C16'] == null) && ($row['D16'] != null) && ($row[ 'E16'] == null) && ($row['F16'] != null) && ($row['G16'] != null) && ($row['H16'] == null))
          {
            Validator::make($row,[
            'C16' => 'required',
            'E16' => 'required',
            'H16' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C16'] == null) && ($row['D16'] != null) && ($row[ 'E16'] == null) && ($row['F16'] != null) && ($row['G16'] == null) && ($row['H16'] == null))
          {
            Validator::make($row,[
            'C16' => 'required',
            'E16' => 'required',
            'G16' => 'required',
            'H16' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C16'] == null) && ($row['D16'] != null) && ($row[ 'E16'] == null) && ($row['F16'] != null) && ($row['G16'] == null) && ($row['H16'] != null))
           {
             Validator::make($row, [
             'C16' => 'required',
             'E16' => 'required',
             'G16' => 'required',
             ],$messages)->validate();
            }

         if( ($row['C16'] != null) && ($row['D16'] == null) && ($row[ 'E16'] == null) && ($row['F16'] == null) && ($row['G16'] != null) && ($row['H16'] == null))
        {
          Validator::make($row,[
          'D16' => 'required',
          'E16' => 'required',
          'F16' => 'required',
          'H16' => 'required',
          ],$messages)->validate();
         }
         
         if( ($row['C16'] != null) && ($row['D16'] != null) && ($row[ 'E16'] == null) && ($row['F16'] != null) && ($row['G16'] == null) && ($row['H16'] != null))
         {
           Validator::make($row, [
           'E16' => 'required',
           'G16' => 'required',
           ],$messages)->validate();
          }

         if( ($row['C16'] != null) && ($row['D16'] != null) && ($row[ 'E16'] == null) && ($row['F16'] == null) && ($row['G16'] != null) && ($row['H16'] == null))
         {
           Validator::make($row, [
           'E16' => 'required',
           'F16' => 'required',
           'H16' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C16'] != null) && ($row['D16'] == null) && ($row[ 'E16'] == null) && ($row['F16'] != null) && ($row['G16'] == null) && ($row['H16'] == null))
          {
            Validator::make($row,[
              'D16' => 'required',
              'E16' => 'required',
              'G16' => 'required',
              'H16' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C16'] != null) && ($row['D16'] != null) && ($row[ 'E16'] == null) && ($row['F16'] != null) && ($row['G16'] == null) && ($row['H16'] == null))
           {
             Validator::make($row, [
               'E16' => 'required',
               'G16' => 'required',
               'H16' => 'required',
             ],$messages)->validate();
            }

          
          
          

         if( ($row['C16'] == null) && ($row['D16'] == null) && ($row[ 'E16'] == null) && ($row['F16'] == null) && ($row['G16'] == null) && ($row['H16'] != null))
         {
           Validator::make($row,[
           'C16' => 'required',
           'D16' => 'required',
           'E16' => 'required',
           'F16' => 'required',
           'G16' => 'required',
           ],$messages)->validate();
          }

         

          if( ($row['C16'] != null) && ($row['D16'] == null) && ($row[ 'E16'] == null) && ($row['F16'] == null) && ($row['G16'] == null) && ($row['H16'] == null))
          {
            Validator::make($row,[
            'D16' => 'required',
            'E16' => 'required',
            'F16' => 'required',
            'G16' => 'required',
            'H16' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C16'] != null) && ($row['D16'] == null) && ($row[ 'E16'] == null) && ($row['F16'] == null) && ($row['G16'] == null) && ($row['H16'] != null))
           {
             Validator::make($row,[
             'D16' => 'required',
             'E16' => 'required',
             'F16' => 'required',
             'G16' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C16'] != null) && ($row['D16'] != null) && ($row[ 'E16'] == null) && ($row['F16'] == null) && ($row['G16'] == null) && ($row['H16'] != null))
            {
              Validator::make($row, [
              'E16' => 'required',
              'F16' => 'required',
              'G16' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C16'] != null) && ($row['D16'] != null) && ($row[ 'E16'] != null) && ($row['F16'] == null) && ($row['G16'] == null) && ($row['H16'] != null))
            {
              Validator::make($row, [
              'F16' => 'required',
              'G16' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C16'] != null) && ($row['D16'] != null) && ($row[ 'E16'] != null) && ($row['F16'] != null) && ($row['G16'] == null) && ($row['H16'] != null))
             {
               Validator::make($row,[
               'G16' => 'required',
               ],$messages)->validate();
              }

            

           if( ($row['C16'] != null) && ($row['D16'] != null) && ($row[ 'E16'] == null) && ($row['F16'] == null) && ($row['G16'] == null) && ($row['H16'] == null) )
          {
            Validator::make($row,[
            'E16' => 'required',
            'F16' => 'required',
            'G16' => 'required',
            'H16' => 'required',
            ],$messages)->validate();
           }

           
           if( ($row['C16'] == null) && ($row['D16'] != null) && ($row[ 'E16'] == null) && ($row['F16'] == null) && ($row['G16'] == null) && ($row['H16'] != null))
          {
            Validator::make($row, [
            'C16' => 'required', 
            'E16' => 'required',
            'F16' => 'required',
            'G16' => 'required',
            ],$messages)->validate();
           }

           
          


           if( ($row['C16'] == null) && ($row['D16'] == null) && ($row[ 'E16'] == null) && ($row['F16'] != null) && ($row['G16'] == null) && ($row['H16'] == null))
           {
             Validator::make($row,[
             'C16' => 'required', 
             'D16' => 'required',
             'E16' => 'required',
             'G16' => 'required',
             'H16' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C16'] == null) && ($row['D16'] == null) && ($row[ 'E16'] != null) && ($row['F16'] == null) && ($row['G16'] == null) && ($row['H16'] == null))
            {
              Validator::make($row, [
              'C16' => 'required', 
              'D16' => 'required',
              'F16' => 'required',
              'G16' => 'required',
              'H16' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C16'] == null) && ($row['D16'] == null) && ($row[ 'E16'] != null) && ($row['F16'] == null) && ($row['G16'] != null) && ($row['H16'] == null))
             {
               Validator::make($row,[
               'C16' => 'required', 
               'D16' => 'required',
               'F16' => 'required',
               'H16' => 'required',
               ],$messages)->validate();
              }

              if( ($row['C16'] == null) && ($row['D16'] != null) && ($row[ 'E16'] != null) && ($row['F16'] == null) && ($row['G16'] == null) && ($row['H16'] == null))
             {
               Validator::make($row,[
               'C16' => 'required', 
               'F16' => 'required',
               'G16' => 'required',
               'H16' => 'required',
               ],$messages)->validate();
              }

             if( ($row['C16'] == null) && ($row['D16'] != null) && ($row[ 'E16'] == null) && ($row['F16'] != null) && ($row['G16'] == null) && ($row['H16'] == null))
            {
              Validator::make($row, [
              'C16' => 'required', 
              'G16' => 'required',
              'H16' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C16'] == null) && ($row['D16'] == null) && ($row[ 'E16'] != null) && ($row['F16'] == null) && ($row['G16'] == null) && ($row['H16'] != null))
             {
               Validator::make($row,[
               'C16' => 'required', 
               'D16' => 'required',
               'F16' => 'required',
               'G16' => 'required',
               ],$messages)->validate();
              }
 
             if( ($row['C16'] == null) && ($row['D16'] != null) && ($row[ 'E16'] == null) && ($row['F16'] == null) && ($row['G16'] == null) && ($row['H16'] == null))
            {
              Validator::make($row,[
              'C16' => 'required', 
              'E16' => 'required',
              'F16' => 'required',
              'G16' => 'required',
              'H16' => 'required',
              ],$messages)->validate();
             }

           if( ($row['C16'] != null) && ($row['D16'] != null) && ($row[ 'E16'] != null) && ($row['F16'] == null) && ($row['G16'] == null) && ($row['H16'] == null))
           {
             Validator::make($row, [
             'F16' => 'required',
             'G16' => 'required',
             'H16' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C16'] != null) && ($row['D16'] != null) && ($row[ 'E16'] != null) && ($row['F16'] != null) && ($row['G16'] == null) && ($row['H16'] == null))
           {
             Validator::make($row,[
             'G16' => 'required',
             'H16' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C16'] != null) && ($row['D16'] != null) && ($row[ 'E16'] != null) && ($row['F16'] != null) && ($row['G16'] != null) && ($row['H16'] == null))
            {
              Validator::make($row, [
              'H16' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C16'] == null) && ($row['D16'] == null) && ($row[ 'E16'] == null) && ($row['F16'] == null) && ($row['G16'] != null) && ($row['H16'] == null))
            {
              Validator::make($row,[
              'C16' => 'required',
              'D16' => 'required',
              'E16' => 'required',
              'F16' => 'required',
              'H16' => 'required',
              ],$messages)->validate();
             }

          if( ($row['C16'] == null) && ($row['D16'] == null) && ($row[ 'E16'] == null) && ($row['F16'] == null) && ($row['G16'] == null) && ($row['H16'] != null))
         {
           Validator::make($row, [
           'C16' => 'required',
           'D16' => 'required',
           'E16' => 'required',
           'F16' => 'required',
           'G16' => 'required',
           ],$messages)->validate();
          }
         if( ($row['C16'] == null) && ($row['D16'] == null) && ($row[ 'E16'] == null) && ($row['F16'] == null) && ($row['G16'] != null) && ($row['H16'] != null))
        {
          Validator::make($row, [
          'C16' => 'required',
          'D16' => 'required',
          'E16' => 'required',
          'F16' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C16'] == null) && ($row['D16'] == null) && ($row[ 'E16'] == null) && ($row['F16'] == null) && ($row['G16'] != null) && ($row['H16'] != null))
         {
           Validator::make($row,[
           'C16' => 'required',
           'D16' => 'required',
           'E16' => 'required',
           'F16' => 'required',
           ],$messages)->validate();
          }
 

        if( ($row['C16'] == null) && ($row['D16'] == null) && ($row[ 'E16'] == null) && ($row['F16'] != null) && ($row['G16'] != null) && ($row['H16'] == null))
        {
          Validator::make($row, [
          'C16' => 'required',
          'D16' => 'required',
          'E16' => 'required',
          'H16' => 'required',
          ],$messages)->validate();
         }


         if( ($row['C16'] == null) && ($row['D16'] == null) && ($row[ 'E16'] == null) && ($row['F16'] != null) && ($row['G16'] != null) && ($row['H16'] != null))
        {
          Validator::make($row, [
          'C16' => 'required',
          'D16' => 'required',
          'E16' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C16'] == null) && ($row['D16'] == null) && ($row[ 'E16'] == null) && ($row['F16'] != null) && ($row['G16'] != null) && ($row['H16'] != null))
         {
           Validator::make($row, [
           'C16' => 'required',
           'D16' => 'required',
           'E16' => 'required',
           ],$messages)->validate();
          }

       if( ($row['C16'] == null) && ($row['D16'] == null) && ($row[ 'E16'] != null) && ($row['F16'] != null) && ($row['G16'] == null) && ($row['H16'] == null))
       {
         Validator::make($row, [
         'C16' => 'required',
         'G16' => 'required',
         'H16' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C16'] == null) && ($row['D16'] == null) && ($row[ 'E16'] != null) && ($row['F16'] != null) && ($row['G16'] != null) && ($row['H16'] == null))
       {
         Validator::make($row,[
         'C16' => 'required',
         'D16' => 'required',
         'H16' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C16'] == null) && ($row['D16'] == null) && ($row[ 'E16'] != null) && ($row['F16'] != null) && ($row['G16'] != null) && ($row['H16'] != null))
        {
          Validator::make($row, [
          'C16' => 'required',
          'D16' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C16'] == null) && ($row['D16'] == null) && ($row[ 'E16'] != null) && ($row['F16'] != null) && ($row['G16'] != null) && ($row['H16'] != null))
        {
          Validator::make($row,[
          'C16' => 'required',
          'D16' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C16'] == null) && ($row['D16'] == null) && ($row[ 'E16'] != null) && ($row['F16'] != null) && ($row['G16'] != null) && ($row['H16'] != null))
        {
          Validator::make($row, [
          'C16' => 'required',
          'D16' => 'required',
          ],$messages)->validate();
         }

       if( ($row['C16'] == null) && ($row['D16'] != null) && ($row[ 'E16'] != null) && ($row['F16'] == null) && ($row['G16'] == null) && ($row['H16'] == null))
       {
         Validator::make($row,[
         'C16' => 'required',
         'F16' => 'required',
         'G16' => 'required',
         'H16' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C16'] == null) && ($row['D16'] != null) && ($row[ 'E16'] != null) && ($row['F16'] != null) && ($row['G16'] == null) && ($row['H16'] == null))
       {
         Validator::make($row, [
         'C16' => 'required',
         'G16' => 'required',
         'H16' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C16'] == null) && ($row['D16'] != null) && ($row[ 'E16'] != null) && ($row['F16'] != null) && ($row['G16'] != null) && ($row['H16'] == null))
        {
          Validator::make($row,[
          'C16' => 'required',
          'H16' => 'required',
          ],$messages)->validate();
         }

        

          if( ($row['C16'] == null) && ($row['D16'] != null) && ($row[ 'E16'] != null) && ($row['F16'] != null) && ($row['G16'] != null) && ($row['H16'] != null))
          {
            Validator::make($row,[
            'C16' => 'required',
            ],$messages)->validate();
           }
      
            if( ($row['C16']!=null) && ($row['D16'] != null) && ($row[ 'E16'] == null) && ($row['F16'] == null) && ($row['G16'] == null) && ($row['H16'] == null))
            {
              Validator::make($row, [
               'E16' => 'required',
                'F16' => 'required',
               'G16' => 'required',
               'H16' => 'required',
              ],$messages)->validate();
              }
        
              if( ($row['C16']!=null) && ($row['D16'] != null) && ($row[ 'E16'] != null) && ($row['F16'] == null) && ($row['G16'] == null) && ($row['H16'] == null))
              {
                Validator::make($row,[
                  'F16' => 'required',
                 'G16' => 'required',
                 'H16' => 'required',
                ],$messages)->validate();
                }

                if( ($row['C16']==null) && ($row['D16'] == null) && ($row[ 'E16'] == null) && ($row['F16'] != null) && ($row['G16'] == null) && ($row['H16'] == null))
              {
                Validator::make($row, [
                  'C16' => 'required',
                 'D16' => 'required',
                 'E16' => 'required',
                  'G16' => 'required',
                  'H16' => 'required',
                ],$messages)->validate();
                }
                if( ($row['C16']!=null) && ($row['D16'] != null) && ($row[ 'E16'] == null) && ($row['F16'] != null) && ($row['G16'] != null) && ($row['H16'] != null))
                {
                  Validator::make($row, [
                   'E16' => 'required',
                  ],$messages)->validate();
                  }

                  if( ($row['C16']!=null) && ($row['D16'] != null) && ($row[ 'E16'] != null) && ($row['F16'] != null) && ($row['G16'] == null) && ($row['H16'] != null))
                {
                  Validator::make($row, [
                   'G16' => 'required',
                  ],$messages)->validate();
                  }

                  
                  if( ($row['C16']!=null) && ($row['D16'] != null) && ($row[ 'E16'] != null) && ($row['F16'] == null) && ($row['G16'] != null) && ($row['H16'] != null))
                {
                  Validator::make($row, [
                   'F16' => 'required',
                  ],$messages)->validate();
                  }



                if( ($row['C16']!=null) && ($row['D16'] != null) && ($row[ 'E16'] != null) && ($row['F16'] != null) && ($row['G16'] == null) && ($row['H16'] == null))
              {
                Validator::make($row,[
                 'G16' => 'required',
                 'H16' => 'required',
                ],$messages)->validate();
                }

                if( ($row['C16']!=null) && ($row['D16'] != null) && ($row[ 'E16'] != null) && ($row['F16'] != null) && ($row['G16'] != null) && ($row['H16'] == null))
                {
                  Validator::make($row, [
                   'H16' => 'required',
                  ],$messages)->validate();
                  }

                  

                  //$d2 = DateTime::createFromFormat('d-m-Y', $row['C16'])->format('Y-m-d')? "" : null;
                  // dd(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['C14'])? "" : null);

                   if($row['C16'] != null){
          return new PartWorkedOn([
             'job_date'  => DateTime::createFromFormat('d-m-Y', $row['C16'])->format('Y-m-d'),
              'repair_code' => $row['D16'],
              'description' =>  $row[ 'E16'],
              'part_no'  => $row['F16'],
              'quantity'  => $row['G16'],
              'unit_price' => $row['H16'],
              'job_cards' => $row[ 'J7'],
              'cost' => $row['P24'] * 1200,
              'outside_cost' => $row['M14'] + 0,
            ]);
           
           }
    }

 
}