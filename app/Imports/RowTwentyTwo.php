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
class RowTwentyTwo implements WithMappedCells,ToModel
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
             'C22' => 'C22',
             'D22' => 'D22',
             'E22' => 'E22',
             'F22' => 'F22',
             'G22' => 'G22',
             'H22' => 'H22',
             'J7'  => 'J7',
             'P30' => 'P30',
             'M14' => 'M14',
             
             
             
      ];
    }

    
    public function model(array $row)
    {
      $messages = [
        'C22.required' => 'We need to know the Date the repair was perfomed in row 22!',
        'D22.required' => 'We need to know the repair code in row 22!',
        'E22.required' => 'We need to know the Description of the Part worked on in row 22!',
        'F22.required' => 'We need to know the Part or Serial Number in row 22!',
        'G22.required' => 'We need to know the Quantity in row 22 !',
        'H22.required' => 'We need to know the Unit Price in row 22!',
    ];

     if( ($row['C22'] !=null) && ($row['D22'] == null) && ($row[ 'E22'] != null) && ($row['F22'] == null) && ($row['G22'] != null) && ($row['H22'] == null))
     {
       Validator::make($row, [
       'D22' => 'required',
       'F22' => 'required',
       'H22' => 'required',
       ],$messages)->validate();
      }

      if( ($row['C22'] !=null) && ($row['D22'] == null) && ($row[ 'E22'] != null) && ($row['F22'] == null) && ($row['G22'] != null) && ($row['H22'] != null))
      {
        Validator::make($row, [
        'D22' => 'required',
        'F22' => 'required',
        ],$messages)->validate();
       }

      if( ($row['C22'] !=null) && ($row['D22'] == null) && ($row[ 'E22'] == null) && ($row['F22'] == null) && ($row['G22'] != null) && ($row['H22'] != null))
     {
       Validator::make($row, [
       'D22' => 'required',
       'E22' => 'required',
       'F22' => 'required',
       ],$messages)->validate();
      }


      if( ($row['C22'] !=null) && ($row['D22'] == null) && ($row[ 'E22'] == null) && ($row['F22'] == null) && ($row['G22'] != null) && ($row['H22'] != null))
      {
        Validator::make($row, [
        'D22' => 'required',
        'E22' => 'required',
        'F22' => 'required',
        ],$messages)->validate();
       }

      if( ($row['C22'] !=null) && ($row['D22'] == null) && ($row[ 'E22'] == null) && ($row['F22'] != null) && ($row['G22'] != null) && ($row['H22'] != null))
      {
        Validator::make($row, [
        'D22' => 'required',
        'E22' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C22'] !=null) && ($row['D22'] == null) && ($row[ 'E22'] != null) && ($row['F22'] == null) && ($row['G22'] != null) && ($row['H22'] != null))
      {
        Validator::make($row, [
        'D22' => 'required',
        'F22' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C22'] !=null) && ($row['D22'] == null) && ($row[ 'E22'] != null) && ($row['F22'] != null) && ($row['G22'] != null) && ($row['H22'] != null))
       {
         Validator::make($row, [
         'D22' => 'required',
         ],$messages)->validate();
        }
 

       if( ($row['C22'] !=null) && ($row['D22'] == null) && ($row[ 'E22'] == null) && ($row['F22'] != null) && ($row['G22'] == null) && ($row['H22'] != null))
       {
         Validator::make($row, [
         'D22' => 'required',
         'F22' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C22'] ==null) && ($row['D22'] == null) && ($row[ 'E22'] == null) && ($row['F22'] != null) && ($row['G22'] == null) && ($row['H22'] != null))
        {
          Validator::make($row,[
          'C22' => 'required', 
          'D22' => 'required',
          'E22' => 'required',
          'G22' => 'required',
          ],$messages)->validate();
         }

        if( ($row['C22'] !=null) && ($row['D22'] == null) && ($row[ 'E22'] == null) && ($row['F22'] != null) && ($row['G22'] != null) && ($row['H22'] != null))
        {
          Validator::make($row,[
          'D22' => 'required',
          'F22' => 'required',
          ],$messages)->validate();
         }
 

       if( ($row['C22'] !=null) && ($row['D22'] != null) && ($row[ 'E22'] == null) && ($row['F22'] == null) && ($row['G22'] != null) && ($row['H22'] != null))
       {
         Validator::make($row, [
         'E22' => 'required',
         'F22' => 'required',
         ],$messages)->validate();
        }


      if( ($row['C22'] !=null) && ($row['D22'] == null) && ($row[ 'E22'] == null) && ($row['F22'] == null) && ($row['G22'] != null) && ($row['H22'] == null))
      {
        Validator::make($row,[
        'D22' => 'required',
        'E22' => 'required',
        'F22' => 'required',
        'H22' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C22'] !=null) && ($row['D22'] != null) && ($row[ 'E22'] == null) && ($row['F22'] == null) && ($row['G22'] != null) && ($row['H22'] == null) )
       {
         Validator::make($row,[
         'E22' => 'required',
         'F22' => 'required',
         'H22' => 'required',
         ],$messages)->validate();
        }

      if( ($row['C22'] !=null) && ($row['D22'] == null) && ($row[ 'E22'] == null) && ($row['F22'] == null) && ($row['G22'] == null) && ($row['H22'] == null))
     {
       Validator::make($row, [
       'D22' => 'required',
       'E22' => 'required',
       'F22' => 'required',
       'G22' => 'required',
       'H22' => 'required',
       ],$messages)->validate();
      }

      if( ($row['C22'] ==null) && ($row['D22'] != null) && ($row[ 'E22'] == null) && ($row['F22'] == null) && ($row['G22'] == null) && ($row['H22'] != null))
      {
        Validator::make($row,[
        'C22' => 'required',
        'E22' => 'required',
        'F22' => 'required',
        'G22' => 'required',
        ],$messages)->validate();
       }


       if( ($row['C22'] ==null) && ($row['D22'] != null) && ($row[ 'E22'] == null) && ($row['F22'] == null) && ($row['G22'] != null) && ($row['H22'] != null))
       {
         Validator::make($row,[
         'C22' => 'required',
         'E22' => 'required',
         'F22' => 'required',
         ],$messages)->validate();
        }
    
      if( ($row['C22'] == null) && ($row['D22'] != null) && ($row[ 'E22'] == null) && ($row['F22'] == null) && ($row['G22'] == null) && ($row['H22'] == null))
      {
        Validator::make($row,[
        'C22' => 'required',
        'E22' => 'required',
        'F22' => 'required',
        'G22' => 'required',
        'H22' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C22'] == null) && ($row['D22'] == null) && ($row[ 'E22'] != null) && ($row['F22'] == null) && ($row['G22'] == null) && ($row['H22'] == null))
      {
        Validator::make($row,[
        'C22' => 'required',
        'D22' => 'required',
        'F22' => 'required',
        'G22' => 'required',
        'H22' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C22'] == null) && ($row['D22'] == null) && ($row[ 'E22'] == null) && ($row['F22'] != null) && ($row['G22'] == null) && ($row['H22'] == null))
       {
         Validator::make($row, [
         'C22' => 'required',
         'D22' => 'required',
         'E22' => 'required',
         'G22' => 'required',
         'H22' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C22'] == null) && ($row['D22'] == null) && ($row[ 'E22'] == null) && ($row['F22'] == null) && ($row['G22'] != null) && ($row['H22'] == null))
        {
          Validator::make($row, [
          'C22' => 'required',
          'D22' => 'required',
          'E22' => 'required',
          'F22' => 'required',
          'H22' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C22'] == null) && ($row['D22'] != null) && ($row[ 'E22'] == null) && ($row['F22'] == null) && ($row['G22'] != null) && ($row['H22'] == null))
         {
           Validator::make($row, [
           'C22' => 'required',
           'E22' => 'required',
           'F22' => 'required',
           'H22' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C22'] == null) && ($row['D22'] != null) && ($row[ 'E22'] == null) && ($row['F22'] == null) && ($row['G22'] != null) && ($row['H22'] == null))
         {
           Validator::make($row,[
           'C22' => 'required',
           'E22' => 'required',
           'F22' => 'required',
           'H22' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C22'] == null) && ($row['D22'] != null) && ($row[ 'E22'] == null) && ($row['F22'] != null) && ($row['G22'] != null) && ($row['H22'] == null))
          {
            Validator::make($row,[
            'C22' => 'required',
            'E22' => 'required',
            'H22' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C22'] == null) && ($row['D22'] != null) && ($row[ 'E22'] == null) && ($row['F22'] != null) && ($row['G22'] == null) && ($row['H22'] == null))
          {
            Validator::make($row,[
            'C22' => 'required',
            'E22' => 'required',
            'G22' => 'required',
            'H22' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C22'] == null) && ($row['D22'] != null) && ($row[ 'E22'] == null) && ($row['F22'] != null) && ($row['G22'] == null) && ($row['H22'] != null))
           {
             Validator::make($row, [
             'C22' => 'required',
             'E22' => 'required',
             'G22' => 'required',
             ],$messages)->validate();
            }

         if( ($row['C22'] != null) && ($row['D22'] == null) && ($row[ 'E22'] == null) && ($row['F22'] == null) && ($row['G22'] != null) && ($row['H22'] == null))
        {
          Validator::make($row,[
          'D22' => 'required',
          'E22' => 'required',
          'F22' => 'required',
          'H22' => 'required',
          ],$messages)->validate();
         }
         
         if( ($row['C22'] != null) && ($row['D22'] != null) && ($row[ 'E22'] == null) && ($row['F22'] != null) && ($row['G22'] == null) && ($row['H22'] != null))
         {
           Validator::make($row, [
           'E22' => 'required',
           'G22' => 'required',
           ],$messages)->validate();
          }

         if( ($row['C22'] != null) && ($row['D22'] != null) && ($row[ 'E22'] == null) && ($row['F22'] == null) && ($row['G22'] != null) && ($row['H22'] == null))
         {
           Validator::make($row, [
           'E22' => 'required',
           'F22' => 'required',
           'H22' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C22'] != null) && ($row['D22'] == null) && ($row[ 'E22'] == null) && ($row['F22'] != null) && ($row['G22'] == null) && ($row['H22'] == null))
          {
            Validator::make($row,[
              'D22' => 'required',
              'E22' => 'required',
              'G22' => 'required',
              'H22' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C22'] != null) && ($row['D22'] != null) && ($row[ 'E22'] == null) && ($row['F22'] != null) && ($row['G22'] == null) && ($row['H22'] == null))
           {
             Validator::make($row, [
               'E22' => 'required',
               'G22' => 'required',
               'H22' => 'required',
             ],$messages)->validate();
            }

          
          
          

         if( ($row['C22'] == null) && ($row['D22'] == null) && ($row[ 'E22'] == null) && ($row['F22'] == null) && ($row['G22'] == null) && ($row['H22'] != null))
         {
           Validator::make($row,[
           'C22' => 'required',
           'D22' => 'required',
           'E22' => 'required',
           'F22' => 'required',
           'G22' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C22'] == null) && ($row['D22'] == null) && ($row[ 'E22'] == null) && ($row['F22'] == null) && ($row['G22'] == null) && ($row['H22'] == null))
        

          if( ($row['C22'] != null) && ($row['D22'] == null) && ($row[ 'E22'] == null) && ($row['F22'] == null) && ($row['G22'] == null) && ($row['H22'] == null))
          {
            Validator::make($row,[
            'D22' => 'required',
            'E22' => 'required',
            'F22' => 'required',
            'G22' => 'required',
            'H22' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C22'] != null) && ($row['D22'] == null) && ($row[ 'E22'] == null) && ($row['F22'] == null) && ($row['G22'] == null) && ($row['H22'] != null))
           {
             Validator::make($row,[
             'D22' => 'required',
             'E22' => 'required',
             'F22' => 'required',
             'G22' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C22'] != null) && ($row['D22'] != null) && ($row[ 'E22'] == null) && ($row['F22'] == null) && ($row['G22'] == null) && ($row['H22'] != null))
            {
              Validator::make($row, [
              'E22' => 'required',
              'F22' => 'required',
              'G22' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C22'] != null) && ($row['D22'] != null) && ($row[ 'E22'] != null) && ($row['F22'] == null) && ($row['G22'] == null) && ($row['H22'] != null))
            {
              Validator::make($row, [
              'F22' => 'required',
              'G22' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C22'] != null) && ($row['D22'] != null) && ($row[ 'E22'] != null) && ($row['F22'] != null) && ($row['G22'] == null) && ($row['H22'] != null))
             {
               Validator::make($row,[
               'G22' => 'required',
               ],$messages)->validate();
              }

            

           if( ($row['C22'] != null) && ($row['D22'] != null) && ($row[ 'E22'] == null) && ($row['F22'] == null) && ($row['G22'] == null) && ($row['H22'] == null))
          {
            Validator::make($row,[
            'E22' => 'required',
            'F22' => 'required',
            'G22' => 'required',
            'H22' => 'required',
            ],$messages)->validate();
           }

           
           if( ($row['C22'] == null) && ($row['D22'] != null) && ($row[ 'E22'] == null) && ($row['F22'] == null) && ($row['G22'] == null) && ($row['H22'] != null))
          {
            Validator::make($row, [
            'C22' => 'required', 
            'E22' => 'required',
            'F22' => 'required',
            'G22' => 'required',
            ],$messages)->validate();
           }

           
          


           if( ($row['C22'] == null) && ($row['D22'] == null) && ($row[ 'E22'] == null) && ($row['F22'] != null) && ($row['G22'] == null) && ($row['H22'] == null))
           {
             Validator::make($row,[
             'C22' => 'required', 
             'D22' => 'required',
             'E22' => 'required',
             'G22' => 'required',
             'H22' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C22'] == null) && ($row['D22'] == null) && ($row[ 'E22'] != null) && ($row['F22'] == null) && ($row['G22'] == null) && ($row['H22'] == null))
            {
              Validator::make($row, [
              'C22' => 'required', 
              'D22' => 'required',
              'F22' => 'required',
              'G22' => 'required',
              'H22' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C22'] == null) && ($row['D22'] == null) && ($row[ 'E22'] != null) && ($row['F22'] == null) && ($row['G22'] != null) && ($row['H22'] == null))
             {
               Validator::make($row,[
               'C22' => 'required', 
               'D22' => 'required',
               'F22' => 'required',
               'H22' => 'required',
               ],$messages)->validate();
              }

              if( ($row['C22'] == null) && ($row['D22'] != null) && ($row[ 'E22'] != null) && ($row['F22'] == null) && ($row['G22'] == null) && ($row['H22'] == null))
             {
               Validator::make($row,[
               'C22' => 'required', 
               'F22' => 'required',
               'G22' => 'required',
               'H22' => 'required',
               ],$messages)->validate();
              }

             if( ($row['C22'] == null) && ($row['D22'] != null) && ($row[ 'E22'] == null) && ($row['F22'] != null) && ($row['G22'] == null) && ($row['H22'] == null))
            {
              Validator::make($row, [
              'C22' => 'required', 
              'G22' => 'required',
              'H22' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C22'] == null) && ($row['D22'] == null) && ($row[ 'E22'] != null) && ($row['F22'] == null) && ($row['G22'] == null) && ($row['H22'] != null))
             {
               Validator::make($row,[
               'C22' => 'required', 
               'D22' => 'required',
               'F22' => 'required',
               'G22' => 'required',
               ],$messages)->validate();
              }
 
             if( ($row['C22'] == null) && ($row['D22'] != null) && ($row[ 'E22'] == null) && ($row['F22'] == null) && ($row['G22'] == null) && ($row['H22'] == null))
            {
              Validator::make($row,[
              'C22' => 'required', 
              'E22' => 'required',
              'F22' => 'required',
              'G22' => 'required',
              'H22' => 'required',
              ],$messages)->validate();
             }

           if( ($row['C22'] != null) && ($row['D22'] != null) && ($row[ 'E22'] != null) && ($row['F22'] == null) && ($row['G22'] == null) && ($row['H22'] == null))
           {
             Validator::make($row, [
             'F22' => 'required',
             'G22' => 'required',
             'H22' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C22'] != null) && ($row['D22'] != null) && ($row[ 'E22'] != null) && ($row['F22'] != null) && ($row['G22'] == null) && ($row['H22'] == null) )
           {
             Validator::make($row,[
             'G22' => 'required',
             'H22' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C22'] != null) && ($row['D22'] != null) && ($row[ 'E22'] != null) && ($row['F22'] != null) && ($row['G22'] != null) && ($row['H22'] == null))
            {
              Validator::make($row, [
              'H22' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C22'] == null) && ($row['D22'] == null) && ($row[ 'E22'] == null) && ($row['F22'] == null) && ($row['G22'] != null) && ($row['H22'] == null))
            {
              Validator::make($row,[
              'C22' => 'required',
              'D22' => 'required',
              'E22' => 'required',
              'F22' => 'required',
              'H22' => 'required',
              ],$messages)->validate();
             }

          if( ($row['C22'] == null) && ($row['D22'] == null) && ($row[ 'E22'] == null) && ($row['F22'] == null) && ($row['G22'] == null) && ($row['H22'] != null))
         {
           Validator::make($row, [
           'C22' => 'required',
           'D22' => 'required',
           'E22' => 'required',
           'F22' => 'required',
           'G22' => 'required',
           ],$messages)->validate();
          }
         if( ($row['C22'] == null) && ($row['D22'] == null) && ($row[ 'E22'] == null) && ($row['F22'] == null) && ($row['G22'] != null) && ($row['H22'] != null))
        {
          Validator::make($row, [
          'C22' => 'required',
          'D22' => 'required',
          'E22' => 'required',
          'F22' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C22'] == null) && ($row['D22'] == null) && ($row[ 'E22'] == null) && ($row['F22'] == null) && ($row['G22'] != null) && ($row['H22'] != null))
         {
           Validator::make($row,[
           'C22' => 'required',
           'D22' => 'required',
           'E22' => 'required',
           'F22' => 'required',
           ],$messages)->validate();
          }
 

        if( ($row['C22'] == null) && ($row['D22'] == null) && ($row[ 'E22'] == null) && ($row['F22'] != null) && ($row['G22'] != null) && ($row['H22'] == null))
        {
          Validator::make($row, [
          'C22' => 'required',
          'D22' => 'required',
          'E22' => 'required',
          'H22' => 'required',
          ],$messages)->validate();
         }


         if( ($row['C22'] == null) && ($row['D22'] == null) && ($row[ 'E22'] == null) && ($row['F22'] != null) && ($row['G22'] != null) && ($row['H22'] != null))
        {
          Validator::make($row, [
          'C22' => 'required',
          'D22' => 'required',
          'E22' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C22'] == null) && ($row['D22'] == null) && ($row[ 'E22'] == null) && ($row['F22'] != null) && ($row['G22'] != null) && ($row['H22'] != null))
         {
           Validator::make($row, [
           'C22' => 'required',
           'D22' => 'required',
           'E22' => 'required',
           ],$messages)->validate();
          }

       if( ($row['C22'] == null) && ($row['D22'] == null) && ($row[ 'E22'] != null) && ($row['F22'] != null) && ($row['G22'] == null) && ($row['H22'] == null))
       {
         Validator::make($row, [
         'C22' => 'required',
         'G22' => 'required',
         'H22' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C22'] == null) && ($row['D22'] == null) && ($row[ 'E22'] != null) && ($row['F22'] != null) && ($row['G22'] != null) && ($row['H22'] == null))
       {
         Validator::make($row,[
         'C22' => 'required',
         'D22' => 'required',
         'H22' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C22'] == null) && ($row['D22'] == null) && ($row[ 'E22'] != null) && ($row['F22'] != null) && ($row['G22'] != null) && ($row['H22'] != null))
        {
          Validator::make($row, [
          'C22' => 'required',
          'D22' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C22'] == null) && ($row['D22'] == null) && ($row[ 'E22'] != null) && ($row['F22'] != null) && ($row['G22'] != null) && ($row['H22'] != null))
        {
          Validator::make($row,[
          'C22' => 'required',
          'D22' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C22'] == null) && ($row['D22'] == null) && ($row[ 'E22'] != null) && ($row['F22'] != null) && ($row['G22'] != null) && ($row['H22'] != null))
        {
          Validator::make($row, [
          'C22' => 'required',
          'D22' => 'required',
          ],$messages)->validate();
         }

       if( ($row['C22'] == null) && ($row['D22'] != null) && ($row[ 'E22'] != null) && ($row['F22'] == null) && ($row['G22'] == null) && ($row['H22'] == null))
       {
         Validator::make($row,[
         'C22' => 'required',
         'F22' => 'required',
         'G22' => 'required',
         'H22' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C22'] == null) && ($row['D22'] != null) && ($row[ 'E22'] != null) && ($row['F22'] != null) && ($row['G22'] == null) && ($row['H22'] == null))
       {
         Validator::make($row, [
         'C22' => 'required',
         'G22' => 'required',
         'H22' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C22'] == null) && ($row['D22'] != null) && ($row[ 'E22'] != null) && ($row['F22'] != null) && ($row['G22'] != null) && ($row['H22'] == null))
        {
          Validator::make($row,[
          'C22' => 'required',
          'H22' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C22'] == null) && ($row['D22'] != null) && ($row[ 'E22'] != null) && ($row['F22'] != null) && ($row['G22'] != null) && ($row['H22'] != null) )
         {
           Validator::make($row, [
           'C22' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C22'] == null) && ($row['D22'] != null) && ($row[ 'E22'] != null) && ($row['F22'] != null) && ($row['G22'] != null) && ($row['H22'] != null))
          {
            Validator::make($row,[
            'C22' => 'required',
            ],$messages)->validate();
           }
      
            if( ($row['C22']!=null) && ($row['D22'] != null) && ($row[ 'E22'] == null) && ($row['F22'] == null) && ($row['G22'] == null) && ($row['H22'] == null))
            {
              Validator::make($row, [
               'E22' => 'required',
                'F22' => 'required',
               'G22' => 'required',
               'H22' => 'required',
              ],$messages)->validate();
              }
        
              if( ($row['C22']!=null) && ($row['D22'] != null) && ($row[ 'E22'] != null) && ($row['F22'] == null) && ($row['G22'] == null) && ($row['H22'] == null))
              {
                Validator::make($row,[
                  'F22' => 'required',
                 'G22' => 'required',
                 'H22' => 'required',
                ],$messages)->validate();
                }

                if( ($row['C22']==null) && ($row['D22'] == null) && ($row[ 'E22'] == null) && ($row['F22'] != null) && ($row['G22'] == null) && ($row['H22'] == null) )
              {
                Validator::make($row, [
                  'C22' => 'required',
                 'D22' => 'required',
                 'E22' => 'required',
                  'G22' => 'required',
                  'H22' => 'required',
                ],$messages)->validate();
                }
                if( ($row['C22']!=null) && ($row['D22'] != null) && ($row[ 'E22'] == null) && ($row['F22'] != null) && ($row['G22'] != null) && ($row['H22'] != null))
                {
                  Validator::make($row, [
                   'E22' => 'required',
                  ],$messages)->validate();
                  }

                  if( ($row['C22']!=null) && ($row['D22'] != null) && ($row[ 'E22'] != null) && ($row['F22'] != null) && ($row['G22'] == null) && ($row['H22'] != null))
                {
                  Validator::make($row, [
                   'G22' => 'required',
                  ],$messages)->validate();
                  }

                  
                  if( ($row['C22']!=null) && ($row['D22'] != null) && ($row[ 'E22'] != null) && ($row['F22'] == null) && ($row['G22'] != null) && ($row['H22'] != null))
                {
                  Validator::make($row, [
                   'F22' => 'required',
                  ],$messages)->validate();
                  }



                if( ($row['C22']!=null) && ($row['D22'] != null) && ($row[ 'E22'] != null) && ($row['F22'] != null) && ($row['G22'] == null) && ($row['H22'] == null))
              {
                Validator::make($row,[
                 'G22' => 'required',
                 'H22' => 'required',
                ],$messages)->validate();
                }

                if( ($row['C22']!=null) && ($row['D22'] != null) && ($row[ 'E22'] != null) && ($row['F22'] != null) && ($row['G22'] != null) && ($row['H22'] == null))
                {
                  Validator::make($row, [
                   'H22' => 'required',
                  ],$messages)->validate();
                  }

                  
                 
                  //$d2 = DateTime::createFromFormat('d-m-Y', $row['C22'])->format('Y-m-d')? "" : null;
                  // dd(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['C14'])? "" : null);

                   if($row['C22'] != null){
          return new PartWorkedOn([
             'job_date'  => DateTime::createFromFormat('d-m-Y', $row['C22'])->format('Y-m-d'),
              'repair_code' => $row['D22'],
              'description' =>  $row[ 'E22'],
              'part_no'  => $row['F22'],
              'quantity'  => $row['G22'],
              'unit_price' => $row['H22'],
              'job_cards' => $row[ 'J7'],
              'cost' => $row['30'] * 1200,
              'outside_cost' => $row['M14'] + 0,
            ]);
          }
          
    }

 
}