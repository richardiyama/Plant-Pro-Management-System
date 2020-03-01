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

class RowNineteen implements WithMappedCells,ToModel
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
             'C19' => 'C19',
             'D19' => 'D19',
             'E19' => 'E19',
             'F19' => 'F19',
             'G19' => 'G19',
             'H19' => 'H19',
             'J7'  => 'J7',
             'P27' => 'P27',
             'M14' => 'M14',
             
             
      ];
    }

    
    public function model(array $row)
    {
      $messages = [
        'C19.required' => 'We need to know the Date the repair was perfomed in row 19!',
        'D19.required' => 'We need to know the repair code in row 19!',
        'E19.required' => 'We need to know the Description of the Part worked on in row 19!',
        'F19.required' => 'We need to know the Part or Serial Number in row 19!',
        'G19.required' => 'We need to know the Quantity in row 19 !',
        'H19.required' => 'We need to know the Unit Price in row 19!',
    ];

     if( ($row['C19'] !=null) && ($row['D19'] == null) && ($row[ 'E19'] != null) && ($row['F19'] == null) && ($row['G19'] != null) && ($row['H19'] == null))
     {
       Validator::make($row, [
       'D19' => 'required',
       'F19' => 'required',
       'H19' => 'required',
       ],$messages)->validate();
      }

      if( ($row['C19'] !=null) && ($row['D19'] == null) && ($row[ 'E19'] != null) && ($row['F19'] == null) && ($row['G19'] != null) && ($row['H19'] != null))
      {
        Validator::make($row, [
        'D19' => 'required',
        'F19' => 'required',
        ],$messages)->validate();
       }

      if( ($row['C19'] !=null) && ($row['D19'] == null) && ($row[ 'E19'] == null) && ($row['F19'] == null) && ($row['G19'] != null) && ($row['H19'] != null))
     {
       Validator::make($row, [
       'D19' => 'required',
       'E19' => 'required',
       'F19' => 'required',
       ],$messages)->validate();
      }


      if( ($row['C19'] !=null) && ($row['D19'] == null) && ($row[ 'E19'] == null) && ($row['F19'] == null) && ($row['G19'] != null) && ($row['H19'] != null))
      {
        Validator::make($row, [
        'D19' => 'required',
        'E19' => 'required',
        'F19' => 'required',
        ],$messages)->validate();
       }

      if( ($row['C19'] !=null) && ($row['D19'] == null) && ($row[ 'E19'] == null) && ($row['F19'] != null) && ($row['G19'] != null) && ($row['H19'] != null))
      {
        Validator::make($row, [
        'D19' => 'required',
        'E19' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C19'] !=null) && ($row['D19'] == null) && ($row[ 'E19'] != null) && ($row['F19'] == null) && ($row['G19'] != null) && ($row['H19'] != null))
      {
        Validator::make($row, [
        'D19' => 'required',
        'F19' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C19'] !=null) && ($row['D19'] == null) && ($row[ 'E19'] != null) && ($row['F19'] != null) && ($row['G19'] != null) && ($row['H19'] != null))
       {
         Validator::make($row, [
         'D19' => 'required',
         ],$messages)->validate();
        }
 

       if( ($row['C19'] !=null) && ($row['D19'] == null) && ($row[ 'E19'] == null) && ($row['F19'] != null) && ($row['G19'] == null) && ($row['H19'] != null))
       {
         Validator::make($row, [
         'D19' => 'required',
         'F19' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C19'] ==null) && ($row['D19'] == null) && ($row[ 'E19'] == null) && ($row['F19'] != null) && ($row['G19'] == null) && ($row['H19'] != null))
        {
          Validator::make($row,[
          'C19' => 'required', 
          'D19' => 'required',
          'E19' => 'required',
          'G19' => 'required',
          ],$messages)->validate();
         }

        if( ($row['C19'] !=null) && ($row['D19'] == null) && ($row[ 'E19'] == null) && ($row['F19'] != null) && ($row['G19'] != null) && ($row['H19'] != null))
        {
          Validator::make($row,[
          'D19' => 'required',
          'F19' => 'required',
          ],$messages)->validate();
         }
 

       if( ($row['C19'] !=null) && ($row['D19'] != null) && ($row[ 'E19'] == null) && ($row['F19'] == null) && ($row['G19'] != null) && ($row['H19'] != null))
       {
         Validator::make($row, [
         'E19' => 'required',
         'F19' => 'required',
         ],$messages)->validate();
        }


      if( ($row['C19'] !=null) && ($row['D19'] == null) && ($row[ 'E19'] == null) && ($row['F19'] == null) && ($row['G19'] != null) && ($row['H19'] == null))
      {
        Validator::make($row,[
        'D19' => 'required',
        'E19' => 'required',
        'F19' => 'required',
        'H19' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C19'] !=null) && ($row['D19'] != null) && ($row[ 'E19'] == null) && ($row['F19'] == null) && ($row['G19'] != null) && ($row['H19'] == null))
       {
         Validator::make($row,[
         'E19' => 'required',
         'F19' => 'required',
         'H19' => 'required',
         ],$messages)->validate();
        }

      if( ($row['C19'] !=null) && ($row['D19'] == null) && ($row[ 'E19'] == null) && ($row['F19'] == null) && ($row['G19'] == null) && ($row['H19'] == null))
     {
       Validator::make($row, [
       'D19' => 'required',
       'E19' => 'required',
       'F19' => 'required',
       'G19' => 'required',
       'H19' => 'required',
       ],$messages)->validate();
      }

      if( ($row['C19'] ==null) && ($row['D19'] != null) && ($row[ 'E19'] == null) && ($row['F19'] == null) && ($row['G19'] == null) && ($row['H19'] != null))
      {
        Validator::make($row,[
        'C19' => 'required',
        'E19' => 'required',
        'F19' => 'required',
        'G19' => 'required',
        ],$messages)->validate();
       }


       if( ($row['C19'] ==null) && ($row['D19'] != null) && ($row[ 'E19'] == null) && ($row['F19'] == null) && ($row['G19'] != null) && ($row['H19'] != null))
       {
         Validator::make($row,[
         'C19' => 'required',
         'E19' => 'required',
         'F19' => 'required',
         ],$messages)->validate();
        }
    
      if( ($row['C19'] == null) && ($row['D19'] != null) && ($row[ 'E19'] == null) && ($row['F19'] == null) && ($row['G19'] == null) && ($row['H19'] == null))
      {
        Validator::make($row,[
        'C19' => 'required',
        'E19' => 'required',
        'F19' => 'required',
        'G19' => 'required',
        'H19' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C19'] == null) && ($row['D19'] == null) && ($row[ 'E19'] != null) && ($row['F19'] == null) && ($row['G19'] == null) && ($row['H19'] == null))
      {
        Validator::make($row,[
        'C19' => 'required',
        'D19' => 'required',
        'F19' => 'required',
        'G19' => 'required',
        'H19' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C19'] == null) && ($row['D19'] == null) && ($row[ 'E19'] == null) && ($row['F19'] != null) && ($row['G19'] == null) && ($row['H19'] == null))
       {
         Validator::make($row, [
         'C19' => 'required',
         'D19' => 'required',
         'E19' => 'required',
         'G19' => 'required',
         'H19' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C19'] == null) && ($row['D19'] == null) && ($row[ 'E19'] == null) && ($row['F19'] == null) && ($row['G19'] != null) && ($row['H19'] == null) )
        {
          Validator::make($row, [
          'C19' => 'required',
          'D19' => 'required',
          'E19' => 'required',
          'F19' => 'required',
          'H19' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C19'] == null) && ($row['D19'] != null) && ($row[ 'E19'] == null) && ($row['F19'] == null) && ($row['G19'] != null) && ($row['H19'] == null))
         {
           Validator::make($row, [
           'C19' => 'required',
           'E19' => 'required',
           'F19' => 'required',
           'H19' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C19'] == null) && ($row['D19'] != null) && ($row[ 'E19'] == null) && ($row['F19'] == null) && ($row['G19'] != null) && ($row['H19'] == null))
         {
           Validator::make($row,[
           'C19' => 'required',
           'E19' => 'required',
           'F19' => 'required',
           'H19' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C19'] == null) && ($row['D19'] != null) && ($row[ 'E19'] == null) && ($row['F19'] != null) && ($row['G19'] != null) && ($row['H19'] == null))
          {
            Validator::make($row,[
            'C19' => 'required',
            'E19' => 'required',
            'H19' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C19'] == null) && ($row['D19'] != null) && ($row[ 'E19'] == null) && ($row['F19'] != null) && ($row['G19'] == null) && ($row['H19'] == null))
          {
            Validator::make($row,[
            'C19' => 'required',
            'E19' => 'required',
            'G19' => 'required',
            'H19' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C19'] == null) && ($row['D19'] != null) && ($row[ 'E19'] == null) && ($row['F19'] != null) && ($row['G19'] == null) && ($row['H19'] != null))
           {
             Validator::make($row, [
             'C19' => 'required',
             'E19' => 'required',
             'G19' => 'required',
             ],$messages)->validate();
            }

         if( ($row['C19'] != null) && ($row['D19'] == null) && ($row[ 'E19'] == null) && ($row['F19'] == null) && ($row['G19'] != null) && ($row['H19'] == null))
        {
          Validator::make($row,[
          'D19' => 'required',
          'E19' => 'required',
          'F19' => 'required',
          'H19' => 'required',
          ],$messages)->validate();
         }
         
         if( ($row['C19'] != null) && ($row['D19'] != null) && ($row[ 'E19'] == null) && ($row['F19'] != null) && ($row['G19'] == null) && ($row['H19'] != null))
         {
           Validator::make($row, [
           'E19' => 'required',
           'G19' => 'required',
           ],$messages)->validate();
          }

         if( ($row['C19'] != null) && ($row['D19'] != null) && ($row[ 'E19'] == null) && ($row['F19'] == null) && ($row['G19'] != null) && ($row['H19'] == null))
         {
           Validator::make($row, [
           'E19' => 'required',
           'F19' => 'required',
           'H19' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C19'] != null) && ($row['D19'] == null) && ($row[ 'E19'] == null) && ($row['F19'] != null) && ($row['G19'] == null) && ($row['H19'] == null))
          {
            Validator::make($row,[
              'D19' => 'required',
              'E19' => 'required',
              'G19' => 'required',
              'H19' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C19'] != null) && ($row['D19'] != null) && ($row[ 'E19'] == null) && ($row['F19'] != null) && ($row['G19'] == null) && ($row['H19'] == null))
           {
             Validator::make($row, [
               'E19' => 'required',
               'G19' => 'required',
               'H19' => 'required',
             ],$messages)->validate();
            }

          
          
          

         if( ($row['C19'] == null) && ($row['D19'] == null) && ($row[ 'E19'] == null) && ($row['F19'] == null) && ($row['G19'] == null) && ($row['H19'] != null))
         {
           Validator::make($row,[
           'C19' => 'required',
           'D19' => 'required',
           'E19' => 'required',
           'F19' => 'required',
           'G19' => 'required',
           ],$messages)->validate();
          }

        

          if( ($row['C19'] != null) && ($row['D19'] == null) && ($row[ 'E19'] == null) && ($row['F19'] == null) && ($row['G19'] == null) && ($row['H19'] == null))
          {
            Validator::make($row,[
            'D19' => 'required',
            'E19' => 'required',
            'F19' => 'required',
            'G19' => 'required',
            'H19' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C19'] != null) && ($row['D19'] == null) && ($row[ 'E19'] == null) && ($row['F19'] == null) && ($row['G19'] == null) && ($row['H19'] != null))
           {
             Validator::make($row,[
             'D19' => 'required',
             'E19' => 'required',
             'F19' => 'required',
             'G19' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C19'] != null) && ($row['D19'] != null) && ($row[ 'E19'] == null) && ($row['F19'] == null) && ($row['G19'] == null) && ($row['H19'] != null))
            {
              Validator::make($row, [
              'E19' => 'required',
              'F19' => 'required',
              'G19' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C19'] != null) && ($row['D19'] != null) && ($row[ 'E19'] != null) && ($row['F19'] == null) && ($row['G19'] == null) && ($row['H19'] != null))
            {
              Validator::make($row, [
              'F19' => 'required',
              'G19' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C19'] != null) && ($row['D19'] != null) && ($row[ 'E19'] != null) && ($row['F19'] != null) && ($row['G19'] == null) && ($row['H19'] != null))
             {
               Validator::make($row,[
               'G19' => 'required',
               ],$messages)->validate();
              }

            

           if( ($row['C19'] != null) && ($row['D19'] != null) && ($row[ 'E19'] == null) && ($row['F19'] == null) && ($row['G19'] == null) && ($row['H19'] == null) )
          {
            Validator::make($row,[
            'E19' => 'required',
            'F19' => 'required',
            'G19' => 'required',
            'H19' => 'required',
            ],$messages)->validate();
           }

           
           if( ($row['C19'] == null) && ($row['D19'] != null) && ($row[ 'E19'] == null) && ($row['F19'] == null) && ($row['G19'] == null) && ($row['H19'] != null))
          {
            Validator::make($row, [
            'C19' => 'required', 
            'E19' => 'required',
            'F19' => 'required',
            'G19' => 'required',
            ],$messages)->validate();
           }

           
          


           if( ($row['C19'] == null) && ($row['D19'] == null) && ($row[ 'E19'] == null) && ($row['F19'] != null) && ($row['G19'] == null) && ($row['H19'] == null))
           {
             Validator::make($row,[
             'C19' => 'required', 
             'D19' => 'required',
             'E19' => 'required',
             'G19' => 'required',
             'H19' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C19'] == null) && ($row['D19'] == null) && ($row[ 'E19'] != null) && ($row['F19'] == null) && ($row['G19'] == null) && ($row['H19'] == null))
            {
              Validator::make($row, [
              'C19' => 'required', 
              'D19' => 'required',
              'F19' => 'required',
              'G19' => 'required',
              'H19' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C19'] == null) && ($row['D19'] == null) && ($row[ 'E19'] != null) && ($row['F19'] == null) && ($row['G19'] != null) && ($row['H19'] == null))
             {
               Validator::make($row,[
               'C19' => 'required', 
               'D19' => 'required',
               'F19' => 'required',
               'H19' => 'required',
               ],$messages)->validate();
              }

              if( ($row['C19'] == null) && ($row['D19'] != null) && ($row[ 'E19'] != null) && ($row['F19'] == null) && ($row['G19'] == null) && ($row['H19'] == null))
             {
               Validator::make($row,[
               'C19' => 'required', 
               'F19' => 'required',
               'G19' => 'required',
               'H19' => 'required',
               ],$messages)->validate();
              }

             if( ($row['C19'] == null) && ($row['D19'] != null) && ($row[ 'E19'] == null) && ($row['F19'] != null) && ($row['G19'] == null) && ($row['H19'] == null))
            {
              Validator::make($row, [
              'C19' => 'required', 
              'G19' => 'required',
              'H19' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C19'] == null) && ($row['D19'] == null) && ($row[ 'E19'] != null) && ($row['F19'] == null) && ($row['G19'] == null) && ($row['H19'] != null))
             {
               Validator::make($row,[
               'C19' => 'required', 
               'D19' => 'required',
               'F19' => 'required',
               'G19' => 'required',
               ],$messages)->validate();
              }
 
             if( ($row['C19'] == null) && ($row['D19'] != null) && ($row[ 'E19'] == null) && ($row['F19'] == null) && ($row['G19'] == null) && ($row['H19'] == null))
            {
              Validator::make($row,[
              'C19' => 'required', 
              'E19' => 'required',
              'F19' => 'required',
              'G19' => 'required',
              'H19' => 'required',
              ],$messages)->validate();
             }

           if( ($row['C19'] != null) && ($row['D19'] != null) && ($row[ 'E19'] != null) && ($row['F19'] == null) && ($row['G19'] == null) && ($row['H19'] == null))
           {
             Validator::make($row, [
             'F19' => 'required',
             'G19' => 'required',
             'H19' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C19'] != null) && ($row['D19'] != null) && ($row[ 'E19'] != null) && ($row['F19'] != null) && ($row['G19'] == null) && ($row['H19'] == null))
           {
             Validator::make($row,[
             'G19' => 'required',
             'H19' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C19'] != null) && ($row['D19'] != null) && ($row[ 'E19'] != null) && ($row['F19'] != null) && ($row['G19'] != null) && ($row['H19'] == null))
            {
              Validator::make($row, [
              'H19' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C19'] == null) && ($row['D19'] == null) && ($row[ 'E19'] == null) && ($row['F19'] == null) && ($row['G19'] != null) && ($row['H19'] == null))
            {
              Validator::make($row,[
              'C19' => 'required',
              'D19' => 'required',
              'E19' => 'required',
              'F19' => 'required',
              'H19' => 'required',
              ],$messages)->validate();
             }

          if( ($row['C19'] == null) && ($row['D19'] == null) && ($row[ 'E19'] == null) && ($row['F19'] == null) && ($row['G19'] == null) && ($row['H19'] != null))
         {
           Validator::make($row, [
           'C19' => 'required',
           'D19' => 'required',
           'E19' => 'required',
           'F19' => 'required',
           'G19' => 'required',
           ],$messages)->validate();
          }
         if( ($row['C19'] == null) && ($row['D19'] == null) && ($row[ 'E19'] == null) && ($row['F19'] == null) && ($row['G19'] != null) && ($row['H19'] != null))
        {
          Validator::make($row, [
          'C19' => 'required',
          'D19' => 'required',
          'E19' => 'required',
          'F19' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C19'] == null) && ($row['D19'] == null) && ($row[ 'E19'] == null) && ($row['F19'] == null) && ($row['G19'] != null) && ($row['H19'] != null))
         {
           Validator::make($row,[
           'C19' => 'required',
           'D19' => 'required',
           'E19' => 'required',
           'F19' => 'required',
           ],$messages)->validate();
          }
 

        if( ($row['C19'] == null) && ($row['D19'] == null) && ($row[ 'E19'] == null) && ($row['F19'] != null) && ($row['G19'] != null) && ($row['H19'] == null))
        {
          Validator::make($row, [
          'C19' => 'required',
          'D19' => 'required',
          'E19' => 'required',
          'H19' => 'required',
          ],$messages)->validate();
         }


         if( ($row['C19'] == null) && ($row['D19'] == null) && ($row[ 'E19'] == null) && ($row['F19'] != null) && ($row['G19'] != null) && ($row['H19'] != null))
        {
          Validator::make($row, [
          'C19' => 'required',
          'D19' => 'required',
          'E19' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C19'] == null) && ($row['D19'] == null) && ($row[ 'E19'] == null) && ($row['F19'] != null) && ($row['G19'] != null) && ($row['H19'] != null))
         {
           Validator::make($row, [
           'C19' => 'required',
           'D19' => 'required',
           'E19' => 'required',
           ],$messages)->validate();
          }

       if( ($row['C19'] == null) && ($row['D19'] == null) && ($row[ 'E19'] != null) && ($row['F19'] != null) && ($row['G19'] == null) && ($row['H19'] == null))
       {
         Validator::make($row, [
         'C19' => 'required',
         'G19' => 'required',
         'H19' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C19'] == null) && ($row['D19'] == null) && ($row[ 'E19'] != null) && ($row['F19'] != null) && ($row['G19'] != null) && ($row['H19'] == null))
       {
         Validator::make($row,[
         'C19' => 'required',
         'D19' => 'required',
         'H19' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C19'] == null) && ($row['D19'] == null) && ($row[ 'E19'] != null) && ($row['F19'] != null) && ($row['G19'] != null) && ($row['H19'] != null))
        {
          Validator::make($row, [
          'C19' => 'required',
          'D19' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C19'] == null) && ($row['D19'] == null) && ($row[ 'E19'] != null) && ($row['F19'] != null) && ($row['G19'] != null) && ($row['H19'] != null))
        {
          Validator::make($row,[
          'C19' => 'required',
          'D19' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C19'] == null) && ($row['D19'] == null) && ($row[ 'E19'] != null) && ($row['F19'] != null) && ($row['G19'] != null) && ($row['H19'] != null))
        {
          Validator::make($row, [
          'C19' => 'required',
          'D19' => 'required',
          ],$messages)->validate();
         }

       if( ($row['C19'] == null) && ($row['D19'] != null) && ($row[ 'E19'] != null) && ($row['F19'] == null) && ($row['G19'] == null) && ($row['H19'] == null))
       {
         Validator::make($row,[
         'C19' => 'required',
         'F19' => 'required',
         'G19' => 'required',
         'H19' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C19'] == null) && ($row['D19'] != null) && ($row[ 'E19'] != null) && ($row['F19'] != null) && ($row['G19'] == null) && ($row['H19'] == null))
       {
         Validator::make($row, [
         'C19' => 'required',
         'G19' => 'required',
         'H19' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C19'] == null) && ($row['D19'] != null) && ($row[ 'E19'] != null) && ($row['F19'] != null) && ($row['G19'] != null) && ($row['H19'] == null))
        {
          Validator::make($row,[
          'C19' => 'required',
          'H19' => 'required',
          ],$messages)->validate();
         }

       

          if( ($row['C19'] == null) && ($row['D19'] != null) && ($row[ 'E19'] != null) && ($row['F19'] != null) && ($row['G19'] != null) && ($row['H19'] != null))
          {
            Validator::make($row,[
            'C19' => 'required',
            ],$messages)->validate();
           }
      
            if( ($row['C19']!=null) && ($row['D19'] != null) && ($row[ 'E19'] == null) && ($row['F19'] == null) && ($row['G19'] == null) && ($row['H19'] == null))
            {
              Validator::make($row, [
               'E19' => 'required',
                'F19' => 'required',
               'G19' => 'required',
               'H19' => 'required',
              ],$messages)->validate();
              }
        
              if( ($row['C19']!=null) && ($row['D19'] != null) && ($row[ 'E19'] != null) && ($row['F19'] == null) && ($row['G19'] == null) && ($row['H19'] == null))
              {
                Validator::make($row,[
                  'F19' => 'required',
                 'G19' => 'required',
                 'H19' => 'required',
                ],$messages)->validate();
                }

                if( ($row['C19']==null) && ($row['D19'] == null) && ($row[ 'E19'] == null) && ($row['F19'] != null) && ($row['G19'] == null) && ($row['H19'] == null))
              {
                Validator::make($row, [
                  'C19' => 'required',
                 'D19' => 'required',
                 'E19' => 'required',
                  'G19' => 'required',
                  'H19' => 'required',
                ],$messages)->validate();
                }
                if( ($row['C19']!=null) && ($row['D19'] != null) && ($row[ 'E19'] == null) && ($row['F19'] != null) && ($row['G19'] != null) && ($row['H19'] != null))
                {
                  Validator::make($row, [
                   'E19' => 'required',
                  ],$messages)->validate();
                  }

                  if( ($row['C19']!=null) && ($row['D19'] != null) && ($row[ 'E19'] != null) && ($row['F19'] != null) && ($row['G19'] == null) && ($row['H19'] != null))
                {
                  Validator::make($row, [
                   'G19' => 'required',
                  ],$messages)->validate();
                  }

                  
                  if( ($row['C19']!=null) && ($row['D19'] != null) && ($row[ 'E19'] != null) && ($row['F19'] == null) && ($row['G19'] != null) && ($row['H19'] != null))
                {
                  Validator::make($row, [
                   'F19' => 'required',
                  ],$messages)->validate();
                  }



                if( ($row['C19']!=null) && ($row['D19'] != null) && ($row[ 'E19'] != null) && ($row['F19'] != null) && ($row['G19'] == null) && ($row['H19'] == null))
              {
                Validator::make($row,[
                 'G19' => 'required',
                 'H19' => 'required',
                ],$messages)->validate();
                }

                if( ($row['C19']!=null) && ($row['D19'] != null) && ($row[ 'E19'] != null) && ($row['F19'] != null) && ($row['G19'] != null) && ($row['H19'] == null))
                {
                  Validator::make($row, [
                   'H19' => 'required',
                  ],$messages)->validate();
                  }

                 
                  //$d2 = DateTime::createFromFormat('d-m-Y', $row['C19'])->format('Y-m-d')? "" : null;
                  // dd(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['C14'])? "" : null);

                   if($row['C19'] != null){
          return new PartWorkedOn([
             'job_date'  => DateTime::createFromFormat('d-m-Y', $row['C19'])->format('Y-m-d'),
              'repair_code' => $row['D19'],
              'description' =>  $row[ 'E19'],
              'part_no'  => $row['F19'],
              'quantity'  => $row['G19'],
              'unit_price' => $row['H19'],
              'job_cards' => $row[ 'J7'],
              'cost' => $row['P27'] * 1200,
              'outside_cost' => $row['M14'] + 0,
            ]);
           
           }
    }

 
}