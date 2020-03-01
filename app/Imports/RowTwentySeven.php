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

class RowTwentySeven implements WithMappedCells,ToModel
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
             'C27' => 'C27',
             'D27' => 'D27',
             'E27' => 'E27',
             'F27' => 'F27',
             'G27' => 'G27',
             'H27' => 'H27',
             'J7'  => 'J7',
             'M14' => 'M14',
             
             
      ];
    }

    
    public function model(array $row)
    {
      $messages = [
        'C27.required' => 'We need to know the Date the repair was perfomed in row 27!',
        'D27.required' => 'We need to know the repair code in row 27!',
        'E27.required' => 'We need to know the Description of the Part worked on in row 27!',
        'F27.required' => 'We need to know the Part or Serial Number in row 27!',
        'G27.required' => 'We need to know the Quantity in row 27 !',
        'H27.required' => 'We need to know the Unit Price in row 27!',
    ];

     if( ($row['C27'] !=null) && ($row['D27'] == null) && ($row[ 'E27'] != null) && ($row['F27'] == null) && ($row['G27'] != null) && ($row['H27'] == null))
     {
       Validator::make($row, [
       'D27' => 'required',
       'F27' => 'required',
       'H27' => 'required',
       ],$messages)->validate();
      }

      if( ($row['C27'] !=null) && ($row['D27'] == null) && ($row[ 'E27'] != null) && ($row['F27'] == null) && ($row['G27'] != null) && ($row['H27'] != null))
      {
        Validator::make($row, [
        'D27' => 'required',
        'F27' => 'required',
        ],$messages)->validate();
       }

      if( ($row['C27'] !=null) && ($row['D27'] == null) && ($row[ 'E27'] == null) && ($row['F27'] == null) && ($row['G27'] != null) && ($row['H27'] != null))
     {
       Validator::make($row, [
       'D27' => 'required',
       'E27' => 'required',
       'F27' => 'required',
       ],$messages)->validate();
      }


      if( ($row['C27'] !=null) && ($row['D27'] == null) && ($row[ 'E27'] == null) && ($row['F27'] == null) && ($row['G27'] != null) && ($row['H27'] != null))
      {
        Validator::make($row, [
        'D27' => 'required',
        'E27' => 'required',
        'F27' => 'required',
        ],$messages)->validate();
       }

      if( ($row['C27'] !=null) && ($row['D27'] == null) && ($row[ 'E27'] == null) && ($row['F27'] != null) && ($row['G27'] != null) && ($row['H27'] != null))
      {
        Validator::make($row, [
        'D27' => 'required',
        'E27' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C27'] !=null) && ($row['D27'] == null) && ($row[ 'E27'] != null) && ($row['F27'] == null) && ($row['G27'] != null) && ($row['H27'] != null))
      {
        Validator::make($row, [
        'D27' => 'required',
        'F27' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C27'] !=null) && ($row['D27'] == null) && ($row[ 'E27'] != null) && ($row['F27'] != null) && ($row['G27'] != null) && ($row['H27'] != null))
       {
         Validator::make($row, [
         'D27' => 'required',
         ],$messages)->validate();
        }
 

       if( ($row['C27'] !=null) && ($row['D27'] == null) && ($row[ 'E27'] == null) && ($row['F27'] != null) && ($row['G27'] == null) && ($row['H27'] != null))
       {
         Validator::make($row, [
         'D27' => 'required',
         'F27' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C27'] ==null) && ($row['D27'] == null) && ($row[ 'E27'] == null) && ($row['F27'] != null) && ($row['G27'] == null) && ($row['H27'] != null))
        {
          Validator::make($row,[
          'C27' => 'required', 
          'D27' => 'required',
          'E27' => 'required',
          'G27' => 'required',
          ],$messages)->validate();
         }

        if( ($row['C27'] !=null) && ($row['D27'] == null) && ($row[ 'E27'] == null) && ($row['F27'] != null) && ($row['G27'] != null) && ($row['H27'] != null))
        {
          Validator::make($row,[
          'D27' => 'required',
          'F27' => 'required',
          ],$messages)->validate();
         }
 

       if( ($row['C27'] !=null) && ($row['D27'] != null) && ($row[ 'E27'] == null) && ($row['F27'] == null) && ($row['G27'] != null) && ($row['H27'] != null))
       {
         Validator::make($row, [
         'E27' => 'required',
         'F27' => 'required',
         ],$messages)->validate();
        }


      if( ($row['C27'] !=null) && ($row['D27'] == null) && ($row[ 'E27'] == null) && ($row['F27'] == null) && ($row['G27'] != null) && ($row['H27'] == null))
      {
        Validator::make($row,[
        'D27' => 'required',
        'E27' => 'required',
        'F27' => 'required',
        'H27' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C27'] !=null) && ($row['D27'] != null) && ($row[ 'E27'] == null) && ($row['F27'] == null) && ($row['G27'] != null) && ($row['H27'] == null))
       {
         Validator::make($row,[
         'E27' => 'required',
         'F27' => 'required',
         'H27' => 'required',
         ],$messages)->validate();
        }

      if( ($row['C27'] !=null) && ($row['D27'] == null) && ($row[ 'E27'] == null) && ($row['F27'] == null) && ($row['G27'] == null) && ($row['H27'] == null))
     {
       Validator::make($row, [
       'D27' => 'required',
       'E27' => 'required',
       'F27' => 'required',
       'G27' => 'required',
       'H27' => 'required',
       ],$messages)->validate();
      }

      if( ($row['C27'] ==null) && ($row['D27'] != null) && ($row[ 'E27'] == null) && ($row['F27'] == null) && ($row['G27'] == null) && ($row['H27'] != null))
      {
        Validator::make($row,[
        'C27' => 'required',
        'E27' => 'required',
        'F27' => 'required',
        'G27' => 'required',
        ],$messages)->validate();
       }


       if( ($row['C27'] ==null) && ($row['D27'] != null) && ($row[ 'E27'] == null) && ($row['F27'] == null) && ($row['G27'] != null) && ($row['H27'] != null))
       {
         Validator::make($row,[
         'C27' => 'required',
         'E27' => 'required',
         'F27' => 'required',
         ],$messages)->validate();
        }
    
      if( ($row['C27'] == null) && ($row['D27'] != null) && ($row[ 'E27'] == null) && ($row['F27'] == null) && ($row['G27'] == null) && ($row['H27'] == null))
      {
        Validator::make($row,[
        'C27' => 'required',
        'E27' => 'required',
        'F27' => 'required',
        'G27' => 'required',
        'H27' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C27'] == null) && ($row['D27'] == null) && ($row[ 'E27'] != null) && ($row['F27'] == null) && ($row['G27'] == null) && ($row['H27'] == null))
      {
        Validator::make($row,[
        'C27' => 'required',
        'D27' => 'required',
        'F27' => 'required',
        'G27' => 'required',
        'H27' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C27'] == null) && ($row['D27'] == null) && ($row[ 'E27'] == null) && ($row['F27'] != null) && ($row['G27'] == null) && ($row['H27'] == null))
       {
         Validator::make($row, [
         'C27' => 'required',
         'D27' => 'required',
         'E27' => 'required',
         'G27' => 'required',
         'H27' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C27'] == null) && ($row['D27'] == null) && ($row[ 'E27'] == null) && ($row['F27'] == null) && ($row['G27'] != null) && ($row['H27'] == null))
        {
          Validator::make($row, [
          'C27' => 'required',
          'D27' => 'required',
          'E27' => 'required',
          'F27' => 'required',
          'H27' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C27'] == null) && ($row['D27'] != null) && ($row[ 'E27'] == null) && ($row['F27'] == null) && ($row['G27'] != null) && ($row['H27'] == null))
         {
           Validator::make($row, [
           'C27' => 'required',
           'E27' => 'required',
           'F27' => 'required',
           'H27' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C27'] == null) && ($row['D27'] != null) && ($row[ 'E27'] == null) && ($row['F27'] == null) && ($row['G27'] != null) && ($row['H27'] == null))
         {
           Validator::make($row,[
           'C27' => 'required',
           'E27' => 'required',
           'F27' => 'required',
           'H27' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C27'] == null) && ($row['D27'] != null) && ($row[ 'E27'] == null) && ($row['F27'] != null) && ($row['G27'] != null) && ($row['H27'] == null))
          {
            Validator::make($row,[
            'C27' => 'required',
            'E27' => 'required',
            'H27' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C27'] == null) && ($row['D27'] != null) && ($row[ 'E27'] == null) && ($row['F27'] != null) && ($row['G27'] == null) && ($row['H27'] == null))
          {
            Validator::make($row,[
            'C27' => 'required',
            'E27' => 'required',
            'G27' => 'required',
            'H27' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C27'] == null) && ($row['D27'] != null) && ($row[ 'E27'] == null) && ($row['F27'] != null) && ($row['G27'] == null) && ($row['H27'] != null))
           {
             Validator::make($row, [
             'C27' => 'required',
             'E27' => 'required',
             'G27' => 'required',

             ],$messages)->validate();
            }

         if( ($row['C27'] != null) && ($row['D27'] == null) && ($row[ 'E27'] == null) && ($row['F27'] == null) && ($row['G27'] != null) && ($row['H27'] == null))
        {
          Validator::make($row,[
          'D27' => 'required',
          'E27' => 'required',
          'F27' => 'required',
          'H27' => 'required',
          ],$messages)->validate();
         }
         
         if( ($row['C27'] != null) && ($row['D27'] != null) && ($row[ 'E27'] == null) && ($row['F27'] != null) && ($row['G27'] == null) && ($row['H27'] != null))
         {
           Validator::make($row, [
           'E27' => 'required',
           'G27' => 'required',
           ],$messages)->validate();
          }

         if( ($row['C27'] != null) && ($row['D27'] != null) && ($row[ 'E27'] == null) && ($row['F27'] == null) && ($row['G27'] != null) && ($row['H27'] == null))
         {
           Validator::make($row, [
           'E27' => 'required',
           'F27' => 'required',
           'H27' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C27'] != null) && ($row['D27'] == null) && ($row[ 'E27'] == null) && ($row['F27'] != null) && ($row['G27'] == null) && ($row['H27'] == null))
          {
            Validator::make($row,[
              'D27' => 'required',
              'E27' => 'required',
              'G27' => 'required',
              'H27' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C27'] != null) && ($row['D27'] != null) && ($row[ 'E27'] == null) && ($row['F27'] != null) && ($row['G27'] == null) && ($row['H27'] == null))
           {
             Validator::make($row, [
               'E27' => 'required',
               'G27' => 'required',
               'H27' => 'required',
             ],$messages)->validate();
            }

          
          
          

         if( ($row['C27'] == null) && ($row['D27'] == null) && ($row[ 'E27'] == null) && ($row['F27'] == null) && ($row['G27'] == null) && ($row['H27'] != null))
         {
           Validator::make($row,[
           'C27' => 'required',
           'D27' => 'required',
           'E27' => 'required',
           'F27' => 'required',
           'G27' => 'required',
           ],$messages)->validate();
          }

          

          if( ($row['C27'] != null) && ($row['D27'] == null) && ($row[ 'E27'] == null) && ($row['F27'] == null) && ($row['G27'] == null) && ($row['H27'] == null))
          {
            Validator::make($row,[
            'D27' => 'required',
            'E27' => 'required',
            'F27' => 'required',
            'G27' => 'required',
            'H27' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C27'] != null) && ($row['D27'] == null) && ($row[ 'E27'] == null) && ($row['F27'] == null) && ($row['G27'] == null) && ($row['H27'] != null))
           {
             Validator::make($row,[
             'D27' => 'required',
             'E27' => 'required',
             'F27' => 'required',
             'G27' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C27'] != null) && ($row['D27'] != null) && ($row[ 'E27'] == null) && ($row['F27'] == null) && ($row['G27'] == null) && ($row['H27'] != null))
            {
              Validator::make($row, [
              'E27' => 'required',
              'F27' => 'required',
              'G27' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C27'] != null) && ($row['D27'] != null) && ($row[ 'E27'] != null) && ($row['F27'] == null) && ($row['G27'] == null) && ($row['H27'] != null))
            {
              Validator::make($row, [
              'F27' => 'required',
              'G27' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C27'] != null) && ($row['D27'] != null) && ($row[ 'E27'] != null) && ($row['F27'] != null) && ($row['G27'] == null) && ($row['H27'] != null))
             {
               Validator::make($row,[
               'G27' => 'required',
               ],$messages)->validate();
              }

            

           if( ($row['C27'] != null) && ($row['D27'] != null) && ($row[ 'E27'] == null) && ($row['F27'] == null) && ($row['G27'] == null) && ($row['H27'] == null))
          {
            Validator::make($row,[
            'E27' => 'required',
            'F27' => 'required',
            'G27' => 'required',
            'H27' => 'required',
            ],$messages)->validate();
           }

           
           if( ($row['C27'] == null) && ($row['D27'] != null) && ($row[ 'E27'] == null) && ($row['F27'] == null) && ($row['G27'] == null) && ($row['H27'] != null))
          {
            Validator::make($row, [
            'C27' => 'required', 
            'E27' => 'required',
            'F27' => 'required',
            'G27' => 'required',
            ],$messages)->validate();
           }

           
          


           if( ($row['C27'] == null) && ($row['D27'] == null) && ($row[ 'E27'] == null) && ($row['F27'] != null) && ($row['G27'] == null) && ($row['H27'] == null))
           {
             Validator::make($row,[
             'C27' => 'required', 
             'D27' => 'required',
             'E27' => 'required',
             'G27' => 'required',
             'H27' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C27'] == null) && ($row['D27'] == null) && ($row[ 'E27'] != null) && ($row['F27'] == null) && ($row['G27'] == null) && ($row['H27'] == null))
            {
              Validator::make($row, [
              'C27' => 'required', 
              'D27' => 'required',
              'F27' => 'required',
              'G27' => 'required',
              'H27' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C27'] == null) && ($row['D27'] == null) && ($row[ 'E27'] != null) && ($row['F27'] == null) && ($row['G27'] != null) && ($row['H27'] == null))
             {
               Validator::make($row,[
               'C27' => 'required', 
               'D27' => 'required',
               'F27' => 'required',
               'H27' => 'required',
               ],$messages)->validate();
              }

              if( ($row['C27'] == null) && ($row['D27'] != null) && ($row[ 'E27'] != null) && ($row['F27'] == null) && ($row['G27'] == null) && ($row['H27'] == null))
             {
               Validator::make($row,[
               'C27' => 'required', 
               'F27' => 'required',
               'G27' => 'required',
               'H27' => 'required',
               ],$messages)->validate();
              }

             if( ($row['C27'] == null) && ($row['D27'] != null) && ($row[ 'E27'] == null) && ($row['F27'] != null) && ($row['G27'] == null) && ($row['H27'] == null))
            {
              Validator::make($row, [
              'C27' => 'required', 
              'G27' => 'required',
              'H27' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C27'] == null) && ($row['D27'] == null) && ($row[ 'E27'] != null) && ($row['F27'] == null) && ($row['G27'] == null) && ($row['H27'] != null))
             {
               Validator::make($row,[
               'C27' => 'required', 
               'D27' => 'required',
               'F27' => 'required',
               'G27' => 'required',
               ],$messages)->validate();
              }
 
             if( ($row['C27'] == null) && ($row['D27'] != null) && ($row[ 'E27'] == null) && ($row['F27'] == null) && ($row['G27'] == null) && ($row['H27'] == null))
            {
              Validator::make($row,[
              'C27' => 'required', 
              'E27' => 'required',
              'F27' => 'required',
              'G27' => 'required',
              'H27' => 'required',
              ],$messages)->validate();
             }

           if( ($row['C27'] != null) && ($row['D27'] != null) && ($row[ 'E27'] != null) && ($row['F27'] == null) && ($row['G27'] == null) && ($row['H27'] == null))
           {
             Validator::make($row, [
             'F27' => 'required',
             'G27' => 'required',
             'H27' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C27'] != null) && ($row['D27'] != null) && ($row[ 'E27'] != null) && ($row['F27'] != null) && ($row['G27'] == null) && ($row['H27'] == null))
           {
             Validator::make($row,[
             'G27' => 'required',
             'H27' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C27'] != null) && ($row['D27'] != null) && ($row[ 'E27'] != null) && ($row['F27'] != null) && ($row['G27'] != null) && ($row['H27'] == null))
            {
              Validator::make($row, [
              'H27' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C27'] == null) && ($row['D27'] == null) && ($row[ 'E27'] == null) && ($row['F27'] == null) && ($row['G27'] != null) && ($row['H27'] == null))
            {
              Validator::make($row,[
              'C27' => 'required',
              'D27' => 'required',
              'E27' => 'required',
              'F27' => 'required',
              'H27' => 'required',
              ],$messages)->validate();
             }

          if( ($row['C27'] == null) && ($row['D27'] == null) && ($row[ 'E27'] == null) && ($row['F27'] == null) && ($row['G27'] == null) && ($row['H27'] != null))
         {
           Validator::make($row, [
           'C27' => 'required',
           'D27' => 'required',
           'E27' => 'required',
           'F27' => 'required',
           'G27' => 'required',
           ],$messages)->validate();
          }
         if( ($row['C27'] == null) && ($row['D27'] == null) && ($row[ 'E27'] == null) && ($row['F27'] == null) && ($row['G27'] != null) && ($row['H27'] != null))
        {
          Validator::make($row, [
          'C27' => 'required',
          'D27' => 'required',
          'E27' => 'required',
          'F27' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C27'] == null) && ($row['D27'] == null) && ($row[ 'E27'] == null) && ($row['F27'] == null) && ($row['G27'] != null) && ($row['H27'] != null))
         {
           Validator::make($row,[
           'C27' => 'required',
           'D27' => 'required',
           'E27' => 'required',
           'F27' => 'required',
           ],$messages)->validate();
          }
 

        if( ($row['C27'] == null) && ($row['D27'] == null) && ($row[ 'E27'] == null) && ($row['F27'] != null) && ($row['G27'] != null) && ($row['H27'] == null))
        {
          Validator::make($row, [
          'C27' => 'required',
          'D27' => 'required',
          'E27' => 'required',
          'H27' => 'required',
          ],$messages)->validate();
         }


         if( ($row['C27'] == null) && ($row['D27'] == null) && ($row[ 'E27'] == null) && ($row['F27'] != null) && ($row['G27'] != null) && ($row['H27'] != null))
        {
          Validator::make($row, [
          'C27' => 'required',
          'D27' => 'required',
          'E27' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C27'] == null) && ($row['D27'] == null) && ($row[ 'E27'] == null) && ($row['F27'] != null) && ($row['G27'] != null) && ($row['H27'] != null))
         {
           Validator::make($row, [
           'C27' => 'required',
           'D27' => 'required',
           'E27' => 'required',
           ],$messages)->validate();
          }

       if( ($row['C27'] == null) && ($row['D27'] == null) && ($row[ 'E27'] != null) && ($row['F27'] != null) && ($row['G27'] == null) && ($row['H27'] == null) )
       {
         Validator::make($row, [
         'C27' => 'required',
         'G27' => 'required',
         'H27' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C27'] == null) && ($row['D27'] == null) && ($row[ 'E27'] != null) && ($row['F27'] != null) && ($row['G27'] != null) && ($row['H27'] == null) )
       {
         Validator::make($row,[
         'C27' => 'required',
         'D27' => 'required',
         'H27' => 'required',
         'I27' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C27'] == null) && ($row['D27'] == null) && ($row[ 'E27'] != null) && ($row['F27'] != null) && ($row['G27'] != null) && ($row['H27'] != null) )
        {
          Validator::make($row, [
          'C27' => 'required',
          'D27' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C27'] == null) && ($row['D27'] == null) && ($row[ 'E27'] != null) && ($row['F27'] != null) && ($row['G27'] != null) && ($row['H27'] != null))
        {
          Validator::make($row,[
          'C27' => 'required',
          'D27' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C27'] == null) && ($row['D27'] == null) && ($row[ 'E27'] != null) && ($row['F27'] != null) && ($row['G27'] != null) && ($row['H27'] != null))
        {
          Validator::make($row, [
          'C27' => 'required',
          'D27' => 'required',
          ],$messages)->validate();
         }

       if( ($row['C27'] == null) && ($row['D27'] != null) && ($row[ 'E27'] != null) && ($row['F27'] == null) && ($row['G27'] == null) && ($row['H27'] == null))
       {
         Validator::make($row,[
         'C27' => 'required',
         'F27' => 'required',
         'G27' => 'required',
         'H27' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C27'] == null) && ($row['D27'] != null) && ($row[ 'E27'] != null) && ($row['F27'] != null) && ($row['G27'] == null) && ($row['H27'] == null))
       {
         Validator::make($row, [
         'C27' => 'required',
         'G27' => 'required',
         'H27' => 'required'
         ],$messages)->validate();
        }

        if( ($row['C27'] == null) && ($row['D27'] != null) && ($row[ 'E27'] != null) && ($row['F27'] != null) && ($row['G27'] != null) && ($row['H27'] == null))
        {
          Validator::make($row,[
          'C27' => 'required',
          'H27' => 'required',
          ],$messages)->validate();
         }

        

          if( ($row['C27'] == null) && ($row['D27'] != null) && ($row[ 'E27'] != null) && ($row['F27'] != null) && ($row['G27'] != null) && ($row['H27'] != null))
          {
            Validator::make($row,[
            'C27' => 'required',
            ],$messages)->validate();
           }
      
            if( ($row['C27']!=null) && ($row['D27'] != null) && ($row[ 'E27'] == null) && ($row['F27'] == null) && ($row['G27'] == null) && ($row['H27'] == null))
            {
              Validator::make($row, [
               'E27' => 'required',
                'F27' => 'required',
               'G27' => 'required',
               'H27' => 'required',
              ],$messages)->validate();
              }
        
              if( ($row['C27']!=null) && ($row['D27'] != null) && ($row[ 'E27'] != null) && ($row['F27'] == null) && ($row['G27'] == null) && ($row['H27'] == null))
              {
                Validator::make($row,[
                  'F27' => 'required',
                 'G27' => 'required',
                 'H27' => 'required',
                ],$messages)->validate();
                }

                if( ($row['C27']==null) && ($row['D27'] == null) && ($row[ 'E27'] == null) && ($row['F27'] != null) && ($row['G27'] == null) && ($row['H27'] == null))
              {
                Validator::make($row, [
                  'C27' => 'required',
                 'D27' => 'required',
                 'E27' => 'required',
                  'G27' => 'required',
                  'H27' => 'required',
                ],$messages)->validate();
                }
                if( ($row['C27']!=null) && ($row['D27'] != null) && ($row[ 'E27'] == null) && ($row['F27'] != null) && ($row['G27'] != null) && ($row['H27'] != null))
                {
                  Validator::make($row, [
                   'E27' => 'required',
                  ],$messages)->validate();
                  }

                  if( ($row['C27']!=null) && ($row['D27'] != null) && ($row[ 'E27'] != null) && ($row['F27'] != null) && ($row['G27'] == null) && ($row['H27'] != null))
                {
                  Validator::make($row, [
                   'G27' => 'required',
                  ],$messages)->validate();
                  }

                  
                  if( ($row['C27']!=null) && ($row['D27'] != null) && ($row[ 'E27'] != null) && ($row['F27'] == null) && ($row['G27'] != null) && ($row['H27'] != null))
                {
                  Validator::make($row, [
                   'F27' => 'required',
                  ],$messages)->validate();
                  }



                if( ($row['C27']!=null) && ($row['D27'] != null) && ($row[ 'E27'] != null) && ($row['F27'] != null) && ($row['G27'] == null) && ($row['H27'] == null))
              {
                Validator::make($row,[
                 'G27' => 'required',
                 'H27' => 'required',
                ],$messages)->validate();
                }

                if( ($row['C27']!=null) && ($row['D27'] != null) && ($row[ 'E27'] != null) && ($row['F27'] != null) && ($row['G27'] != null) && ($row['H27'] == null))
                {
                  Validator::make($row, [
                   'H27' => 'required',
                  ],$messages)->validate();
                  }


                 
                  //dd($check);
                  //$result = DateTime::createFromFormat('d-m-Y', $row['C27'])->format('Y-m-d');
                 // dd($result);
                //$d2 =  $result? "" : null;
                  // dd(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['C14'])? "" : null);

                   if($row['C27'] != null){
          return new PartWorkedOn([
             'job_date'  => DateTime::createFromFormat('d-m-Y', $row['C27'])->format('Y-m-d'),
              'repair_code' => $row['D27'],
              'description' =>  $row[ 'E27'],
              'part_no'  => $row['F27'],
              'quantity'  => $row['G27'],
              'unit_price' => $row['H27'],
              'job_cards' => $row[ 'J7'],
              'outside_cost' => $row['M14'] + 0,
            ]);
           
           }
    }

 
}
