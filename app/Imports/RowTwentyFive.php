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
class RowTwentyFive implements WithMappedCells,ToModel
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
             'C25' => 'C25',
             'D25' => 'D25',
             'E25' => 'E25',
             'F25' => 'F25',
             'G25' => 'G25',
             'H25' => 'H25',
             'J7'  => 'J7',
             'M14' => 'M14',
             
      ];
    }

    
    public function model(array $row)
    {
      $messages = [
        'C25.required' => 'We need to know the Date the repair was perfomed in row 25!',
        'D25.required' => 'We need to know the repair code in row 25!',
        'E25.required' => 'We need to know the Description of the Part worked on in row 25!',
        'F25.required' => 'We need to know the Part or Serial Number in row 25!',
        'G25.required' => 'We need to know the Quantity in row 25 !',
        'H25.required' => 'We need to know the Unit Price in row 25!',
    ];

     if( ($row['C25'] !=null) && ($row['D25'] == null) && ($row[ 'E25'] != null) && ($row['F25'] == null) && ($row['G25'] != null) && ($row['H25'] == null))
     {
       Validator::make($row, [
       'D25' => 'required',
       'F25' => 'required',
       'H25' => 'required',
       ],$messages)->validate();
      }

      if( ($row['C25'] !=null) && ($row['D25'] == null) && ($row[ 'E25'] != null) && ($row['F25'] == null) && ($row['G25'] != null) && ($row['H25'] != null))
      {
        Validator::make($row, [
        'D25' => 'required',
        'F25' => 'required',
        ],$messages)->validate();
       }

      if( ($row['C25'] !=null) && ($row['D25'] == null) && ($row[ 'E25'] == null) && ($row['F25'] == null) && ($row['G25'] != null) && ($row['H25'] != null))
     {
       Validator::make($row, [
       'D25' => 'required',
       'E25' => 'required',
       'F25' => 'required',
       ],$messages)->validate();
      }


      if( ($row['C25'] !=null) && ($row['D25'] == null) && ($row[ 'E25'] == null) && ($row['F25'] == null) && ($row['G25'] != null) && ($row['H25'] != null))
      {
        Validator::make($row, [
        'D25' => 'required',
        'E25' => 'required',
        'F25' => 'required',
        ],$messages)->validate();
       }

      if( ($row['C25'] !=null) && ($row['D25'] == null) && ($row[ 'E25'] == null) && ($row['F25'] != null) && ($row['G25'] != null) && ($row['H25'] != null))
      {
        Validator::make($row, [
        'D25' => 'required',
        'E25' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C25'] !=null) && ($row['D25'] == null) && ($row[ 'E25'] != null) && ($row['F25'] == null) && ($row['G25'] != null) && ($row['H25'] != null))
      {
        Validator::make($row, [
        'D25' => 'required',
        'F25' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C25'] !=null) && ($row['D25'] == null) && ($row[ 'E25'] != null) && ($row['F25'] != null) && ($row['G25'] != null) && ($row['H25'] != null))
       {
         Validator::make($row, [
         'D25' => 'required',
         ],$messages)->validate();
        }
 

       if( ($row['C25'] !=null) && ($row['D25'] == null) && ($row[ 'E25'] == null) && ($row['F25'] != null) && ($row['G25'] == null) && ($row['H25'] != null))
       {
         Validator::make($row, [
         'D25' => 'required',
         'F25' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C25'] ==null) && ($row['D25'] == null) && ($row[ 'E25'] == null) && ($row['F25'] != null) && ($row['G25'] == null) && ($row['H25'] != null))
        {
          Validator::make($row,[
          'C25' => 'required', 
          'D25' => 'required',
          'E25' => 'required',
          'G25' => 'required',
          ],$messages)->validate();
         }

        if( ($row['C25'] !=null) && ($row['D25'] == null) && ($row[ 'E25'] == null) && ($row['F25'] != null) && ($row['G25'] != null) && ($row['H25'] != null))
        {
          Validator::make($row,[
          'D25' => 'required',
          'F25' => 'required',
          ],$messages)->validate();
         }
 

       if( ($row['C25'] !=null) && ($row['D25'] != null) && ($row[ 'E25'] == null) && ($row['F25'] == null) && ($row['G25'] != null) && ($row['H25'] != null))
       {
         Validator::make($row, [
         'E25' => 'required',
         'F25' => 'required',
         ],$messages)->validate();
        }


      if( ($row['C25'] !=null) && ($row['D25'] == null) && ($row[ 'E25'] == null) && ($row['F25'] == null) && ($row['G25'] != null) && ($row['H25'] == null))
      {
        Validator::make($row,[
        'D25' => 'required',
        'E25' => 'required',
        'F25' => 'required',
        'H25' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C25'] !=null) && ($row['D25'] != null) && ($row[ 'E25'] == null) && ($row['F25'] == null) && ($row['G25'] != null) && ($row['H25'] == null))
       {
         Validator::make($row,[
         'E25' => 'required',
         'F25' => 'required',
         'H25' => 'required',
         ],$messages)->validate();
        }

      if( ($row['C25'] !=null) && ($row['D25'] == null) && ($row[ 'E25'] == null) && ($row['F25'] == null) && ($row['G25'] == null) && ($row['H25'] == null))
     {
       Validator::make($row, [
       'D25' => 'required',
       'E25' => 'required',
       'F25' => 'required',
       'G25' => 'required',
       'H25' => 'required',
       ],$messages)->validate();
      }

      if( ($row['C25'] ==null) && ($row['D25'] != null) && ($row[ 'E25'] == null) && ($row['F25'] == null) && ($row['G25'] == null) && ($row['H25'] != null))
      {
        Validator::make($row,[
        'C25' => 'required',
        'E25' => 'required',
        'F25' => 'required',
        'G25' => 'required',
        ],$messages)->validate();
       }


       if( ($row['C25'] ==null) && ($row['D25'] != null) && ($row[ 'E25'] == null) && ($row['F25'] == null) && ($row['G25'] != null) && ($row['H25'] != null))
       {
         Validator::make($row,[
         'C25' => 'required',
         'E25' => 'required',
         'F25' => 'required',
         ],$messages)->validate();
        }
    
      if( ($row['C25'] == null) && ($row['D25'] != null) && ($row[ 'E25'] == null) && ($row['F25'] == null) && ($row['G25'] == null) && ($row['H25'] == null))
      {
        Validator::make($row,[
        'C25' => 'required',
        'E25' => 'required',
        'F25' => 'required',
        'G25' => 'required',
        'H25' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C25'] == null) && ($row['D25'] == null) && ($row[ 'E25'] != null) && ($row['F25'] == null) && ($row['G25'] == null) && ($row['H25'] == null))
      {
        Validator::make($row,[
        'C25' => 'required',
        'D25' => 'required',
        'F25' => 'required',
        'G25' => 'required',
        'H25' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C25'] == null) && ($row['D25'] == null) && ($row[ 'E25'] == null) && ($row['F25'] != null) && ($row['G25'] == null) && ($row['H25'] == null))
       {
         Validator::make($row, [
         'C25' => 'required',
         'D25' => 'required',
         'E25' => 'required',
         'G25' => 'required',
         'H25' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C25'] == null) && ($row['D25'] == null) && ($row[ 'E25'] == null) && ($row['F25'] == null) && ($row['G25'] != null) && ($row['H25'] == null))
        {
          Validator::make($row, [
          'C25' => 'required',
          'D25' => 'required',
          'E25' => 'required',
          'F25' => 'required',
          'H25' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C25'] == null) && ($row['D25'] != null) && ($row[ 'E25'] == null) && ($row['F25'] == null) && ($row['G25'] != null) && ($row['H25'] == null))
         {
           Validator::make($row, [
           'C25' => 'required',
           'E25' => 'required',
           'F25' => 'required',
           'H25' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C25'] == null) && ($row['D25'] != null) && ($row[ 'E25'] == null) && ($row['F25'] == null) && ($row['G25'] != null) && ($row['H25'] == null))
         {
           Validator::make($row,[
           'C25' => 'required',
           'E25' => 'required',
           'F25' => 'required',
           'H25' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C25'] == null) && ($row['D25'] != null) && ($row[ 'E25'] == null) && ($row['F25'] != null) && ($row['G25'] != null) && ($row['H25'] == null))
          {
            Validator::make($row,[
            'C25' => 'required',
            'E25' => 'required',
            'H25' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C25'] == null) && ($row['D25'] != null) && ($row[ 'E25'] == null) && ($row['F25'] != null) && ($row['G25'] == null) && ($row['H25'] == null))
          {
            Validator::make($row,[
            'C25' => 'required',
            'E25' => 'required',
            'G25' => 'required',
            'H25' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C25'] == null) && ($row['D25'] != null) && ($row[ 'E25'] == null) && ($row['F25'] != null) && ($row['G25'] == null) && ($row['H25'] != null))
           {
             Validator::make($row, [
             'C25' => 'required',
             'E25' => 'required',
             'G25' => 'required',
             ],$messages)->validate();
            }

         if( ($row['C25'] != null) && ($row['D25'] == null) && ($row[ 'E25'] == null) && ($row['F25'] == null) && ($row['G25'] != null) && ($row['H25'] == null))
        {
          Validator::make($row,[
          'D25' => 'required',
          'E25' => 'required',
          'F25' => 'required',
          'H25' => 'required',
          ],$messages)->validate();
         }
         
         if( ($row['C25'] != null) && ($row['D25'] != null) && ($row[ 'E25'] == null) && ($row['F25'] != null) && ($row['G25'] == null) && ($row['H25'] != null))
         {
           Validator::make($row, [
           'E25' => 'required',
           'G25' => 'required',
           ],$messages)->validate();
          }

         if( ($row['C25'] != null) && ($row['D25'] != null) && ($row[ 'E25'] == null) && ($row['F25'] == null) && ($row['G25'] != null) && ($row['H25'] == null))
         {
           Validator::make($row, [
           'E25' => 'required',
           'F25' => 'required',
           'H25' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C25'] != null) && ($row['D25'] == null) && ($row[ 'E25'] == null) && ($row['F25'] != null) && ($row['G25'] == null) && ($row['H25'] == null))
          {
            Validator::make($row,[
              'D25' => 'required',
              'E25' => 'required',
              'G25' => 'required',
              'H25' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C25'] != null) && ($row['D25'] != null) && ($row[ 'E25'] == null) && ($row['F25'] != null) && ($row['G25'] == null) && ($row['H25'] == null))
           {
             Validator::make($row, [
               'E25' => 'required',
               'G25' => 'required',
               'H25' => 'required',
             ],$messages)->validate();
            }

          
          
          

         if( ($row['C25'] == null) && ($row['D25'] == null) && ($row[ 'E25'] == null) && ($row['F25'] == null) && ($row['G25'] == null) && ($row['H25'] != null))
         {
           Validator::make($row,[
           'C25' => 'required',
           'D25' => 'required',
           'E25' => 'required',
           'F25' => 'required',
           'G25' => 'required',
           ],$messages)->validate();
          }

        

          if( ($row['C25'] != null) && ($row['D25'] == null) && ($row[ 'E25'] == null) && ($row['F25'] == null) && ($row['G25'] == null) && ($row['H25'] == null))
          {
            Validator::make($row,[
            'D25' => 'required',
            'E25' => 'required',
            'F25' => 'required',
            'G25' => 'required',
            'H25' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C25'] != null) && ($row['D25'] == null) && ($row[ 'E25'] == null) && ($row['F25'] == null) && ($row['G25'] == null) && ($row['H25'] != null))
           {
             Validator::make($row,[
             'D25' => 'required',
             'E25' => 'required',
             'F25' => 'required',
             'G25' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C25'] != null) && ($row['D25'] != null) && ($row[ 'E25'] == null) && ($row['F25'] == null) && ($row['G25'] == null) && ($row['H25'] != null))
            {
              Validator::make($row, [
              'E25' => 'required',
              'F25' => 'required',
              'G25' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C25'] != null) && ($row['D25'] != null) && ($row[ 'E25'] != null) && ($row['F25'] == null) && ($row['G25'] == null) && ($row['H25'] != null))
            {
              Validator::make($row, [
              'F25' => 'required',
              'G25' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C25'] != null) && ($row['D25'] != null) && ($row[ 'E25'] != null) && ($row['F25'] != null) && ($row['G25'] == null) && ($row['H25'] != null))
             {
               Validator::make($row,[
               'G25' => 'required',
               ],$messages)->validate();
              }

            

           if( ($row['C25'] != null) && ($row['D25'] != null) && ($row[ 'E25'] == null) && ($row['F25'] == null) && ($row['G25'] == null) && ($row['H25'] == null))
          {
            Validator::make($row,[
            'E25' => 'required',
            'F25' => 'required',
            'G25' => 'required',
            'H25' => 'required',
            ],$messages)->validate();
           }

           
           if( ($row['C25'] == null) && ($row['D25'] != null) && ($row[ 'E25'] == null) && ($row['F25'] == null) && ($row['G25'] == null) && ($row['H25'] != null))
          {
            Validator::make($row, [
            'C25' => 'required', 
            'E25' => 'required',
            'F25' => 'required',
            'G25' => 'required',
            ],$messages)->validate();
           }

           
          


           if( ($row['C25'] == null) && ($row['D25'] == null) && ($row[ 'E25'] == null) && ($row['F25'] != null) && ($row['G25'] == null) && ($row['H25'] == null))
           {
             Validator::make($row,[
             'C25' => 'required', 
             'D25' => 'required',
             'E25' => 'required',
             'G25' => 'required',
             'H25' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C25'] == null) && ($row['D25'] == null) && ($row[ 'E25'] != null) && ($row['F25'] == null) && ($row['G25'] == null) && ($row['H25'] == null))
            {
              Validator::make($row, [
              'C25' => 'required', 
              'D25' => 'required',
              'F25' => 'required',
              'G25' => 'required',
              'H25' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C25'] == null) && ($row['D25'] == null) && ($row[ 'E25'] != null) && ($row['F25'] == null) && ($row['G25'] != null) && ($row['H25'] == null))
             {
               Validator::make($row,[
               'C25' => 'required', 
               'D25' => 'required',
               'F25' => 'required',
               'H25' => 'required',
               ],$messages)->validate();
              }

              if( ($row['C25'] == null) && ($row['D25'] != null) && ($row[ 'E25'] != null) && ($row['F25'] == null) && ($row['G25'] == null) && ($row['H25'] == null))
             {
               Validator::make($row,[
               'C25' => 'required', 
               'F25' => 'required',
               'G25' => 'required',
               'H25' => 'required',
               ],$messages)->validate();
              }

             if( ($row['C25'] == null) && ($row['D25'] != null) && ($row[ 'E25'] == null) && ($row['F25'] != null) && ($row['G25'] == null) && ($row['H25'] == null))
            {
              Validator::make($row, [
              'C25' => 'required', 
              'G25' => 'required',
              'H25' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C25'] == null) && ($row['D25'] == null) && ($row[ 'E25'] != null) && ($row['F25'] == null) && ($row['G25'] == null) && ($row['H25'] != null))
             {
               Validator::make($row,[
               'C25' => 'required', 
               'D25' => 'required',
               'F25' => 'required',
               'G25' => 'required',
               ],$messages)->validate();
              }
 
             if( ($row['C25'] == null) && ($row['D25'] != null) && ($row[ 'E25'] == null) && ($row['F25'] == null) && ($row['G25'] == null) && ($row['H25'] == null))
            {
              Validator::make($row,[
              'C25' => 'required', 
              'E25' => 'required',
              'F25' => 'required',
              'G25' => 'required',
              'H25' => 'required',
              ],$messages)->validate();
             }

           if( ($row['C25'] != null) && ($row['D25'] != null) && ($row[ 'E25'] != null) && ($row['F25'] == null) && ($row['G25'] == null) && ($row['H25'] == null))
           {
             Validator::make($row, [
             'F25' => 'required',
             'G25' => 'required',
             'H25' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C25'] != null) && ($row['D25'] != null) && ($row[ 'E25'] != null) && ($row['F25'] != null) && ($row['G25'] == null) && ($row['H25'] == null))
           {
             Validator::make($row,[
             'G25' => 'required',
             'H25' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C25'] != null) && ($row['D25'] != null) && ($row[ 'E25'] != null) && ($row['F25'] != null) && ($row['G25'] != null) && ($row['H25'] == null))
            {
              Validator::make($row, [
              'H25' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C25'] == null) && ($row['D25'] == null) && ($row[ 'E25'] == null) && ($row['F25'] == null) && ($row['G25'] != null) && ($row['H25'] == null))
            {
              Validator::make($row,[
              'C25' => 'required',
              'D25' => 'required',
              'E25' => 'required',
              'F25' => 'required',
              'H25' => 'required',
              ],$messages)->validate();
             }

          if( ($row['C25'] == null) && ($row['D25'] == null) && ($row[ 'E25'] == null) && ($row['F25'] == null) && ($row['G25'] == null) && ($row['H25'] != null))
         {
           Validator::make($row, [
           'C25' => 'required',
           'D25' => 'required',
           'E25' => 'required',
           'F25' => 'required',
           'G25' => 'required',
           ],$messages)->validate();
          }
         if( ($row['C25'] == null) && ($row['D25'] == null) && ($row[ 'E25'] == null) && ($row['F25'] == null) && ($row['G25'] != null) && ($row['H25'] != null))
        {
          Validator::make($row, [
          'C25' => 'required',
          'D25' => 'required',
          'E25' => 'required',
          'F25' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C25'] == null) && ($row['D25'] == null) && ($row[ 'E25'] == null) && ($row['F25'] == null) && ($row['G25'] != null) && ($row['H25'] != null))
         {
           Validator::make($row,[
           'C25' => 'required',
           'D25' => 'required',
           'E25' => 'required',
           'F25' => 'required',
           ],$messages)->validate();
          }
 

        if( ($row['C25'] == null) && ($row['D25'] == null) && ($row[ 'E25'] == null) && ($row['F25'] != null) && ($row['G25'] != null) && ($row['H25'] == null))
        {
          Validator::make($row, [
          'C25' => 'required',
          'D25' => 'required',
          'E25' => 'required',
          'H25' => 'required',
          ],$messages)->validate();
         }


         if( ($row['C25'] == null) && ($row['D25'] == null) && ($row[ 'E25'] == null) && ($row['F25'] != null) && ($row['G25'] != null) && ($row['H25'] != null))
        {
          Validator::make($row, [
          'C25' => 'required',
          'D25' => 'required',
          'E25' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C25'] == null) && ($row['D25'] == null) && ($row[ 'E25'] == null) && ($row['F25'] != null) && ($row['G25'] != null) && ($row['H25'] != null))
         {
           Validator::make($row, [
           'C25' => 'required',
           'D25' => 'required',
           'E25' => 'required',
           ],$messages)->validate();
          }

       if( ($row['C25'] == null) && ($row['D25'] == null) && ($row[ 'E25'] != null) && ($row['F25'] != null) && ($row['G25'] == null) && ($row['H25'] == null))
       {
         Validator::make($row, [
         'C25' => 'required',
         'G25' => 'required',
         'H25' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C25'] == null) && ($row['D25'] == null) && ($row[ 'E25'] != null) && ($row['F25'] != null) && ($row['G25'] != null) && ($row['H25'] == null))
       {
         Validator::make($row,[
         'C25' => 'required',
         'D25' => 'required',
         'H25' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C25'] == null) && ($row['D25'] == null) && ($row[ 'E25'] != null) && ($row['F25'] != null) && ($row['G25'] != null) && ($row['H25'] != null))
        {
          Validator::make($row, [
          'C25' => 'required',
          'D25' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C25'] == null) && ($row['D25'] == null) && ($row[ 'E25'] != null) && ($row['F25'] != null) && ($row['G25'] != null) && ($row['H25'] != null))
        {
          Validator::make($row,[
          'C25' => 'required',
          'D25' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C25'] == null) && ($row['D25'] == null) && ($row[ 'E25'] != null) && ($row['F25'] != null) && ($row['G25'] != null) && ($row['H25'] != null))
        {
          Validator::make($row, [
          'C25' => 'required',
          'D25' => 'required',
          ],$messages)->validate();
         }

       if( ($row['C25'] == null) && ($row['D25'] != null) && ($row[ 'E25'] != null) && ($row['F25'] == null) && ($row['G25'] == null) && ($row['H25'] == null))
       {
         Validator::make($row,[
         'C25' => 'required',
         'F25' => 'required',
         'G25' => 'required',
         'H25' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C25'] == null) && ($row['D25'] != null) && ($row[ 'E25'] != null) && ($row['F25'] != null) && ($row['G25'] == null) && ($row['H25'] == null))
       {
         Validator::make($row, [
         'C25' => 'required',
         'G25' => 'required',
         'H25' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C25'] == null) && ($row['D25'] != null) && ($row[ 'E25'] != null) && ($row['F25'] != null) && ($row['G25'] != null) && ($row['H25'] == null) )
        {
          Validator::make($row,[
          'C25' => 'required',
          'H25' => 'required',
          ],$messages)->validate();
         }

        

          if( ($row['C25'] == null) && ($row['D25'] != null) && ($row[ 'E25'] != null) && ($row['F25'] != null) && ($row['G25'] != null) && ($row['H25'] != null))
          {
            Validator::make($row,[
            'C25' => 'required',
            ],$messages)->validate();
           }
      
            if( ($row['C25']!=null) && ($row['D25'] != null) && ($row[ 'E25'] == null) && ($row['F25'] == null) && ($row['G25'] == null) && ($row['H25'] == null))
            {
              Validator::make($row, [
               'E25' => 'required',
                'F25' => 'required',
               'G25' => 'required',
               'H25' => 'required',
              ],$messages)->validate();
              }
        
              if( ($row['C25']!=null) && ($row['D25'] != null) && ($row[ 'E25'] != null) && ($row['F25'] == null) && ($row['G25'] == null) && ($row['H25'] == null))
              {
                Validator::make($row,[
                  'F25' => 'required',
                 'G25' => 'required',
                 'H25' => 'required',
                ],$messages)->validate();
                }

                if( ($row['C25']==null) && ($row['D25'] == null) && ($row[ 'E25'] == null) && ($row['F25'] != null) && ($row['G25'] == null) && ($row['H25'] == null))
              {
                Validator::make($row, [
                  'C25' => 'required',
                 'D25' => 'required',
                 'E25' => 'required',
                  'G25' => 'required',
                  'H25' => 'required',
                ],$messages)->validate();
                }
                if( ($row['C25']!=null) && ($row['D25'] != null) && ($row[ 'E25'] == null) && ($row['F25'] != null) && ($row['G25'] != null) && ($row['H25'] != null))
                {
                  Validator::make($row, [
                   'E25' => 'required',
                  ],$messages)->validate();
                  }

                  if( ($row['C25']!=null) && ($row['D25'] != null) && ($row[ 'E25'] != null) && ($row['F25'] != null) && ($row['G25'] == null) && ($row['H25'] != null))
                {
                  Validator::make($row, [
                   'G25' => 'required',
                  ],$messages)->validate();
                  }

                  
                  if( ($row['C25']!=null) && ($row['D25'] != null) && ($row[ 'E25'] != null) && ($row['F25'] == null) && ($row['G25'] != null) && ($row['H25'] != null))
                {
                  Validator::make($row, [
                   'F25' => 'required',
                  ],$messages)->validate();
                  }



                if( ($row['C25']!=null) && ($row['D25'] != null) && ($row[ 'E25'] != null) && ($row['F25'] != null) && ($row['G25'] == null) && ($row['H25'] == null))
              {
                Validator::make($row,[
                 'G25' => 'required',
                 'H25' => 'required',
                ],$messages)->validate();
                }

                if( ($row['C25']!=null) && ($row['D25'] != null) && ($row[ 'E25'] != null) && ($row['F25'] != null) && ($row['G25'] != null) && ($row['H25'] == null))
                {
                  Validator::make($row, [
                   'H25' => 'required',
                  ],$messages)->validate();
                  }

                  
                 // $d2 = DateTime::createFromFormat('d-m-Y', $row['C25'])->format('Y-m-d')? "" : null;
                  // dd(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['C14'])? "" : null);

                   if($row['C25'] != null){
          return new PartWorkedOn([
              'job_date'  => DateTime::createFromFormat('d-m-Y', $row['C25'])->format('Y-m-d'),
              'repair_code' => $row['D25'],
              'description' =>  $row[ 'E25'],
              'part_no'  => $row['F25'],
              'quantity'  => $row['G25'],
              'unit_price' => $row['H25'],
              'job_cards' => $row[ 'J7'],
              'outside_cost' => $row['M14'] + 0,
            ]);
           
           }
    }

 
}
