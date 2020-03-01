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
class RowTwentyOne implements WithMappedCells,ToModel
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
             'C21' => 'C21',
             'D21' => 'D21',
             'E21' => 'E21',
             'F21' => 'F21',
             'G21' => 'G21',
             'H21' => 'H21',
             'J7'  => 'J7',
             'P29' => 'P29',
             'M14' => 'M14',
             
             
      ];
    }

    
    public function model(array $row)
    {
      $messages = [
        'C21.required' => 'We need to know the Date the repair was perfomed in row 21!',
        'D21.required' => 'We need to know the repair code in row 21!',
        'E21.required' => 'We need to know the Description of the Part worked on in row 21!',
        'F21.required' => 'We need to know the Part or Serial Number in row 21!',
        'G21.required' => 'We need to know the Quantity in row 21 !',
        'H21.required' => 'We need to know the Unit Price in row 21!',
    ];

     if( ($row['C21'] !=null) && ($row['D21'] == null) && ($row[ 'E21'] != null) && ($row['F21'] == null) && ($row['G21'] != null) && ($row['H21'] == null))
     {
       Validator::make($row, [
       'D21' => 'required',
       'F21' => 'required',
       'H21' => 'required',
       ],$messages)->validate();
      }

      if( ($row['C21'] !=null) && ($row['D21'] == null) && ($row[ 'E21'] != null) && ($row['F21'] == null) && ($row['G21'] != null) && ($row['H21'] != null))
      {
        Validator::make($row, [
        'D21' => 'required',
        'F21' => 'required',
        ],$messages)->validate();
       }

      if( ($row['C21'] !=null) && ($row['D21'] == null) && ($row[ 'E21'] == null) && ($row['F21'] == null) && ($row['G21'] != null) && ($row['H21'] != null))
     {
       Validator::make($row, [
       'D21' => 'required',
       'E21' => 'required',
       'F21' => 'required',
       ],$messages)->validate();
      }


      if( ($row['C21'] !=null) && ($row['D21'] == null) && ($row[ 'E21'] == null) && ($row['F21'] == null) && ($row['G21'] != null) && ($row['H21'] != null))
      {
        Validator::make($row, [
        'D21' => 'required',
        'E21' => 'required',
        'F21' => 'required',
        ],$messages)->validate();
       }

      if( ($row['C21'] !=null) && ($row['D21'] == null) && ($row[ 'E21'] == null) && ($row['F21'] != null) && ($row['G21'] != null) && ($row['H21'] != null))
      {
        Validator::make($row, [
        'D21' => 'required',
        'E21' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C21'] !=null) && ($row['D21'] == null) && ($row[ 'E21'] != null) && ($row['F21'] == null) && ($row['G21'] != null) && ($row['H21'] != null))
      {
        Validator::make($row, [
        'D21' => 'required',
        'F21' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C21'] !=null) && ($row['D21'] == null) && ($row[ 'E21'] != null) && ($row['F21'] != null) && ($row['G21'] != null) && ($row['H21'] != null))
       {
         Validator::make($row, [
         'D21' => 'required',
         ],$messages)->validate();
        }
 

       if( ($row['C21'] !=null) && ($row['D21'] == null) && ($row[ 'E21'] == null) && ($row['F21'] != null) && ($row['G21'] == null) && ($row['H21'] != null))
       {
         Validator::make($row, [
         'D21' => 'required',
         'F21' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C21'] ==null) && ($row['D21'] == null) && ($row[ 'E21'] == null) && ($row['F21'] != null) && ($row['G21'] == null) && ($row['H21'] != null))
        {
          Validator::make($row,[
          'C21' => 'required', 
          'D21' => 'required',
          'E21' => 'required',
          'G21' => 'required',
          ],$messages)->validate();
         }

        if( ($row['C21'] !=null) && ($row['D21'] == null) && ($row[ 'E21'] == null) && ($row['F21'] != null) && ($row['G21'] != null) && ($row['H21'] != null))
        {
          Validator::make($row,[
          'D21' => 'required',
          'F21' => 'required',
          ],$messages)->validate();
         }
 

       if( ($row['C21'] !=null) && ($row['D21'] != null) && ($row[ 'E21'] == null) && ($row['F21'] == null) && ($row['G21'] != null) && ($row['H21'] != null))
       {
         Validator::make($row, [
         'E21' => 'required',
         'F21' => 'required',
         ],$messages)->validate();
        }


      if( ($row['C21'] !=null) && ($row['D21'] == null) && ($row[ 'E21'] == null) && ($row['F21'] == null) && ($row['G21'] != null) && ($row['H21'] == null))
      {
        Validator::make($row,[
        'D21' => 'required',
        'E21' => 'required',
        'F21' => 'required',
        'H21' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C21'] !=null) && ($row['D21'] != null) && ($row[ 'E21'] == null) && ($row['F21'] == null) && ($row['G21'] != null) && ($row['H21'] == null))
       {
         Validator::make($row,[
         'E21' => 'required',
         'F21' => 'required',
         'H21' => 'required',
         ],$messages)->validate();
        }

      if( ($row['C21'] !=null) && ($row['D21'] == null) && ($row[ 'E21'] == null) && ($row['F21'] == null) && ($row['G21'] == null) && ($row['H21'] == null))
     {
       Validator::make($row, [
       'D21' => 'required',
       'E21' => 'required',
       'F21' => 'required',
       'G21' => 'required',
       'H21' => 'required',
       ],$messages)->validate();
      }

      if( ($row['C21'] ==null) && ($row['D21'] != null) && ($row[ 'E21'] == null) && ($row['F21'] == null) && ($row['G21'] == null) && ($row['H21'] != null))
      {
        Validator::make($row,[
        'C21' => 'required',
        'E21' => 'required',
        'F21' => 'required',
        'G21' => 'required',
        ],$messages)->validate();
       }


       if( ($row['C21'] ==null) && ($row['D21'] != null) && ($row[ 'E21'] == null) && ($row['F21'] == null) && ($row['G21'] != null) && ($row['H21'] != null))
       {
         Validator::make($row,[
         'C21' => 'required',
         'E21' => 'required',
         'F21' => 'required',
         ],$messages)->validate();
        }
    
      if( ($row['C21'] == null) && ($row['D21'] != null) && ($row[ 'E21'] == null) && ($row['F21'] == null) && ($row['G21'] == null) && ($row['H21'] == null))
      {
        Validator::make($row,[
        'C21' => 'required',
        'E21' => 'required',
        'F21' => 'required',
        'G21' => 'required',
        'H21' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C21'] == null) && ($row['D21'] == null) && ($row[ 'E21'] != null) && ($row['F21'] == null) && ($row['G21'] == null) && ($row['H21'] == null))
      {
        Validator::make($row,[
        'C21' => 'required',
        'D21' => 'required',
        'F21' => 'required',
        'G21' => 'required',
        'H21' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C21'] == null) && ($row['D21'] == null) && ($row[ 'E21'] == null) && ($row['F21'] != null) && ($row['G21'] == null) && ($row['H21'] == null))
       {
         Validator::make($row, [
         'C21' => 'required',
         'D21' => 'required',
         'E21' => 'required',
         'G21' => 'required',
         'H21' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C21'] == null) && ($row['D21'] == null) && ($row[ 'E21'] == null) && ($row['F21'] == null) && ($row['G21'] != null) && ($row['H21'] == null))
        {
          Validator::make($row, [
          'C21' => 'required',
          'D21' => 'required',
          'E21' => 'required',
          'F21' => 'required',
          'H21' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C21'] == null) && ($row['D21'] != null) && ($row[ 'E21'] == null) && ($row['F21'] == null) && ($row['G21'] != null) && ($row['H21'] == null))
         {
           Validator::make($row, [
           'C21' => 'required',
           'E21' => 'required',
           'F21' => 'required',
           'H21' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C21'] == null) && ($row['D21'] != null) && ($row[ 'E21'] == null) && ($row['F21'] == null) && ($row['G21'] != null) && ($row['H21'] == null))
         {
           Validator::make($row,[
           'C21' => 'required',
           'E21' => 'required',
           'F21' => 'required',
           'H21' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C21'] == null) && ($row['D21'] != null) && ($row[ 'E21'] == null) && ($row['F21'] != null) && ($row['G21'] != null) && ($row['H21'] == null))
          {
            Validator::make($row,[
            'C21' => 'required',
            'E21' => 'required',
            'H21' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C21'] == null) && ($row['D21'] != null) && ($row[ 'E21'] == null) && ($row['F21'] != null) && ($row['G21'] == null) && ($row['H21'] == null))
          {
            Validator::make($row,[
            'C21' => 'required',
            'E21' => 'required',
            'G21' => 'required',
            'H21' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C21'] == null) && ($row['D21'] != null) && ($row[ 'E21'] == null) && ($row['F21'] != null) && ($row['G21'] == null) && ($row['H21'] != null))
           {
             Validator::make($row, [
             'C21' => 'required',
             'E21' => 'required',
             'G21' => 'required',
             ],$messages)->validate();
            }

         if( ($row['C21'] != null) && ($row['D21'] == null) && ($row[ 'E21'] == null) && ($row['F21'] == null) && ($row['G21'] != null) && ($row['H21'] == null))
        {
          Validator::make($row,[
          'D21' => 'required',
          'E21' => 'required',
          'F21' => 'required',
          'H21' => 'required',
          ],$messages)->validate();
         }
         
         if( ($row['C21'] != null) && ($row['D21'] != null) && ($row[ 'E21'] == null) && ($row['F21'] != null) && ($row['G21'] == null) && ($row['H21'] != null))
         {
           Validator::make($row, [
           'E21' => 'required',
           'G21' => 'required',
           ],$messages)->validate();
          }

         if( ($row['C21'] != null) && ($row['D21'] != null) && ($row[ 'E21'] == null) && ($row['F21'] == null) && ($row['G21'] != null) && ($row['H21'] == null))
         {
           Validator::make($row, [
           'E21' => 'required',
           'F21' => 'required',
           'H21' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C21'] != null) && ($row['D21'] == null) && ($row[ 'E21'] == null) && ($row['F21'] != null) && ($row['G21'] == null) && ($row['H21'] == null))
          {
            Validator::make($row,[
              'D21' => 'required',
              'E21' => 'required',
              'G21' => 'required',
              'H21' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C21'] != null) && ($row['D21'] != null) && ($row[ 'E21'] == null) && ($row['F21'] != null) && ($row['G21'] == null) && ($row['H21'] == null))
           {
             Validator::make($row, [
               'E21' => 'required',
               'G21' => 'required',
               'H21' => 'required',
             ],$messages)->validate();
            }

          
          
          

         if( ($row['C21'] == null) && ($row['D21'] == null) && ($row[ 'E21'] == null) && ($row['F21'] == null) && ($row['G21'] == null) && ($row['H21'] != null))
         {
           Validator::make($row,[
           'C21' => 'required',
           'D21' => 'required',
           'E21' => 'required',
           'F21' => 'required',
           'G21' => 'required',
           ],$messages)->validate();
          }

        
          if( ($row['C21'] != null) && ($row['D21'] == null) && ($row[ 'E21'] == null) && ($row['F21'] == null) && ($row['G21'] == null) && ($row['H21'] == null))
          {
            Validator::make($row,[
            'D21' => 'required',
            'E21' => 'required',
            'F21' => 'required',
            'G21' => 'required',
            'H21' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C21'] != null) && ($row['D21'] == null) && ($row[ 'E21'] == null) && ($row['F21'] == null) && ($row['G21'] == null) && ($row['H21'] != null))
           {
             Validator::make($row,[
             'D21' => 'required',
             'E21' => 'required',
             'F21' => 'required',
             'G21' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C21'] != null) && ($row['D21'] != null) && ($row[ 'E21'] == null) && ($row['F21'] == null) && ($row['G21'] == null) && ($row['H21'] != null))
            {
              Validator::make($row, [
              'E21' => 'required',
              'F21' => 'required',
              'G21' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C21'] != null) && ($row['D21'] != null) && ($row[ 'E21'] != null) && ($row['F21'] == null) && ($row['G21'] == null) && ($row['H21'] != null))
            {
              Validator::make($row, [
              'F21' => 'required',
              'G21' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C21'] != null) && ($row['D21'] != null) && ($row[ 'E21'] != null) && ($row['F21'] != null) && ($row['G21'] == null) && ($row['H21'] != null))
             {
               Validator::make($row,[
               'G21' => 'required',
               ],$messages)->validate();
              }

            

           if( ($row['C21'] != null) && ($row['D21'] != null) && ($row[ 'E21'] == null) && ($row['F21'] == null) && ($row['G21'] == null) && ($row['H21'] == null))
          {
            Validator::make($row,[
            'E21' => 'required',
            'F21' => 'required',
            'G21' => 'required',
            'H21' => 'required',
            ],$messages)->validate();
           }

           
           if( ($row['C21'] == null) && ($row['D21'] != null) && ($row[ 'E21'] == null) && ($row['F21'] == null) && ($row['G21'] == null) && ($row['H21'] != null))
          {
            Validator::make($row, [
            'C21' => 'required', 
            'E21' => 'required',
            'F21' => 'required',
            'G21' => 'required',
            ],$messages)->validate();
           }

           
          


           if( ($row['C21'] == null) && ($row['D21'] == null) && ($row[ 'E21'] == null) && ($row['F21'] != null) && ($row['G21'] == null) && ($row['H21'] == null))
           {
             Validator::make($row,[
             'C21' => 'required', 
             'D21' => 'required',
             'E21' => 'required',
             'G21' => 'required',
             'H21' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C21'] == null) && ($row['D21'] == null) && ($row[ 'E21'] != null) && ($row['F21'] == null) && ($row['G21'] == null) && ($row['H21'] == null))
            {
              Validator::make($row, [
              'C21' => 'required', 
              'D21' => 'required',
              'F21' => 'required',
              'G21' => 'required',
              'H21' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C21'] == null) && ($row['D21'] == null) && ($row[ 'E21'] != null) && ($row['F21'] == null) && ($row['G21'] != null) && ($row['H21'] == null))
             {
               Validator::make($row,[
               'C21' => 'required', 
               'D21' => 'required',
               'F21' => 'required',
               'H21' => 'required',
               ],$messages)->validate();
              }

              if( ($row['C21'] == null) && ($row['D21'] != null) && ($row[ 'E21'] != null) && ($row['F21'] == null) && ($row['G21'] == null) && ($row['H21'] == null))
             {
               Validator::make($row,[
               'C21' => 'required', 
               'F21' => 'required',
               'G21' => 'required',
               'H21' => 'required',
               ],$messages)->validate();
              }

             if( ($row['C21'] == null) && ($row['D21'] != null) && ($row[ 'E21'] == null) && ($row['F21'] != null) && ($row['G21'] == null) && ($row['H21'] == null) )
            {
              Validator::make($row, [
              'C21' => 'required', 
              'G21' => 'required',
              'H21' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C21'] == null) && ($row['D21'] == null) && ($row[ 'E21'] != null) && ($row['F21'] == null) && ($row['G21'] == null) && ($row['H21'] != null))
             {
               Validator::make($row,[
               'C21' => 'required', 
               'D21' => 'required',
               'F21' => 'required',
               'G21' => 'required',
               ],$messages)->validate();
              }
 
             if( ($row['C21'] == null) && ($row['D21'] != null) && ($row[ 'E21'] == null) && ($row['F21'] == null) && ($row['G21'] == null) && ($row['H21'] == null))
            {
              Validator::make($row,[
              'C21' => 'required', 
              'E21' => 'required',
              'F21' => 'required',
              'G21' => 'required',
              'H21' => 'required',
              ],$messages)->validate();
             }

           if( ($row['C21'] != null) && ($row['D21'] != null) && ($row[ 'E21'] != null) && ($row['F21'] == null) && ($row['G21'] == null) && ($row['H21'] == null))
           {
             Validator::make($row, [
             'F21' => 'required',
             'G21' => 'required',
             'H21' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C21'] != null) && ($row['D21'] != null) && ($row[ 'E21'] != null) && ($row['F21'] != null) && ($row['G21'] == null) && ($row['H21'] == null))
           {
             Validator::make($row,[
             'G21' => 'required',
             'H21' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C21'] != null) && ($row['D21'] != null) && ($row[ 'E21'] != null) && ($row['F21'] != null) && ($row['G21'] != null) && ($row['H21'] == null))
            {
              Validator::make($row, [
              'H21' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C21'] == null) && ($row['D21'] == null) && ($row[ 'E21'] == null) && ($row['F21'] == null) && ($row['G21'] != null) && ($row['H21'] == null))
            {
              Validator::make($row,[
              'C21' => 'required',
              'D21' => 'required',
              'E21' => 'required',
              'F21' => 'required',
              'H21' => 'required',
              ],$messages)->validate();
             }

          if( ($row['C21'] == null) && ($row['D21'] == null) && ($row[ 'E21'] == null) && ($row['F21'] == null) && ($row['G21'] == null) && ($row['H21'] != null))
         {
           Validator::make($row, [
           'C21' => 'required',
           'D21' => 'required',
           'E21' => 'required',
           'F21' => 'required',
           'G21' => 'required',
           ],$messages)->validate();
          }
         if( ($row['C21'] == null) && ($row['D21'] == null) && ($row[ 'E21'] == null) && ($row['F21'] == null) && ($row['G21'] != null) && ($row['H21'] != null) )
        {
          Validator::make($row, [
          'C21' => 'required',
          'D21' => 'required',
          'E21' => 'required',
          'F21' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C21'] == null) && ($row['D21'] == null) && ($row[ 'E21'] == null) && ($row['F21'] == null) && ($row['G21'] != null) && ($row['H21'] != null))
         {
           Validator::make($row,[
           'C21' => 'required',
           'D21' => 'required',
           'E21' => 'required',
           'F21' => 'required',
           ],$messages)->validate();
          }
 

        if( ($row['C21'] == null) && ($row['D21'] == null) && ($row[ 'E21'] == null) && ($row['F21'] != null) && ($row['G21'] != null) && ($row['H21'] == null))
        {
          Validator::make($row, [
          'C21' => 'required',
          'D21' => 'required',
          'E21' => 'required',
          'H21' => 'required',
          ],$messages)->validate();
         }


         if( ($row['C21'] == null) && ($row['D21'] == null) && ($row[ 'E21'] == null) && ($row['F21'] != null) && ($row['G21'] != null) && ($row['H21'] != null))
        {
          Validator::make($row, [
          'C21' => 'required',
          'D21' => 'required',
          'E21' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C21'] == null) && ($row['D21'] == null) && ($row[ 'E21'] == null) && ($row['F21'] != null) && ($row['G21'] != null) && ($row['H21'] != null) )
         {
           Validator::make($row, [
           'C21' => 'required',
           'D21' => 'required',
           'E21' => 'required',
           ],$messages)->validate();
          }

       if( ($row['C21'] == null) && ($row['D21'] == null) && ($row[ 'E21'] != null) && ($row['F21'] != null) && ($row['G21'] == null) && ($row['H21'] == null))
       {
         Validator::make($row, [
         'C21' => 'required',
         'G21' => 'required',
         'H21' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C21'] == null) && ($row['D21'] == null) && ($row[ 'E21'] != null) && ($row['F21'] != null) && ($row['G21'] != null) && ($row['H21'] == null))
       {
         Validator::make($row,[
         'C21' => 'required',
         'D21' => 'required',
         'H21' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C21'] == null) && ($row['D21'] == null) && ($row[ 'E21'] != null) && ($row['F21'] != null) && ($row['G21'] != null) && ($row['H21'] != null))
        {
          Validator::make($row, [
          'C21' => 'required',
          'D21' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C21'] == null) && ($row['D21'] == null) && ($row[ 'E21'] != null) && ($row['F21'] != null) && ($row['G21'] != null) && ($row['H21'] != null))
        {
          Validator::make($row,[
          'C21' => 'required',
          'D21' => 'required',
          'I21' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C21'] == null) && ($row['D21'] == null) && ($row[ 'E21'] != null) && ($row['F21'] != null) && ($row['G21'] != null) && ($row['H21'] != null))
        {
          Validator::make($row, [
          'C21' => 'required',
          'D21' => 'required',
          ],$messages)->validate();
         }

       if( ($row['C21'] == null) && ($row['D21'] != null) && ($row[ 'E21'] != null) && ($row['F21'] == null) && ($row['G21'] == null) && ($row['H21'] == null))
       {
         Validator::make($row,[
         'C21' => 'required',
         'F21' => 'required',
         'G21' => 'required',
         'H21' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C21'] == null) && ($row['D21'] != null) && ($row[ 'E21'] != null) && ($row['F21'] != null) && ($row['G21'] == null) && ($row['H21'] == null))
       {
         Validator::make($row, [
         'C21' => 'required',
         'G21' => 'required',
         'H21' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C21'] == null) && ($row['D21'] != null) && ($row[ 'E21'] != null) && ($row['F21'] != null) && ($row['G21'] != null) && ($row['H21'] == null))
        {
          Validator::make($row,[
          'C21' => 'required',
          'H21' => 'required',
          ],$messages)->validate();
         }

         

          if( ($row['C21'] == null) && ($row['D21'] != null) && ($row[ 'E21'] != null) && ($row['F21'] != null) && ($row['G21'] != null) && ($row['H21'] != null))
          {
            Validator::make($row,[
            'C21' => 'required',
            ],$messages)->validate();
           }
      
            if( ($row['C21']!=null) && ($row['D21'] != null) && ($row[ 'E21'] == null) && ($row['F21'] == null) && ($row['G21'] == null) && ($row['H21'] == null))
            {
              Validator::make($row, [
               'E21' => 'required',
                'F21' => 'required',
               'G21' => 'required',
               'H21' => 'required',
              ],$messages)->validate();
              }
        
              if( ($row['C21']!=null) && ($row['D21'] != null) && ($row[ 'E21'] != null) && ($row['F21'] == null) && ($row['G21'] == null) && ($row['H21'] == null))
              {
                Validator::make($row,[
                  'F21' => 'required',
                 'G21' => 'required',
                 'H21' => 'required',
                ],$messages)->validate();
                }

                if( ($row['C21']==null) && ($row['D21'] == null) && ($row[ 'E21'] == null) && ($row['F21'] != null) && ($row['G21'] == null) && ($row['H21'] == null))
              {
                Validator::make($row, [
                  'C21' => 'required',
                 'D21' => 'required',
                 'E21' => 'required',
                  'G21' => 'required',
                  'H21' => 'required',
                ],$messages)->validate();
                }
                if( ($row['C21']!=null) && ($row['D21'] != null) && ($row[ 'E21'] == null) && ($row['F21'] != null) && ($row['G21'] != null) && ($row['H21'] != null))
                {
                  Validator::make($row, [
                   'E21' => 'required',
                  ],$messages)->validate();
                  }

                  if( ($row['C21']!=null) && ($row['D21'] != null) && ($row[ 'E21'] != null) && ($row['F21'] != null) && ($row['G21'] == null) && ($row['H21'] != null))
                {
                  Validator::make($row, [
                   'G21' => 'required',
                  ],$messages)->validate();
                  }

                  
                  if( ($row['C21']!=null) && ($row['D21'] != null) && ($row[ 'E21'] != null) && ($row['F21'] == null) && ($row['G21'] != null) && ($row['H21'] != null))
                {
                  Validator::make($row, [
                   'F21' => 'required',
                  ],$messages)->validate();
                  }



                if( ($row['C21']!=null) && ($row['D21'] != null) && ($row[ 'E21'] != null) && ($row['F21'] != null) && ($row['G21'] == null) && ($row['H21'] == null))
              {
                Validator::make($row,[
                 'G21' => 'required',
                 'H21' => 'required',
                ],$messages)->validate();
                }

                if( ($row['C21']!=null) && ($row['D21'] != null) && ($row[ 'E21'] != null) && ($row['F21'] != null) && ($row['G21'] != null) && ($row['H21'] == null))
                {
                  Validator::make($row, [
                   'H21' => 'required',
                  ],$messages)->validate();
                  }

                  $d2 = $row['C21'];

                  //$d2 = DateTime::createFromFormat('d-m-Y', $row['C21'])->format('Y-m-d')? "" : null;
                  // dd(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['C14'])? "" : null);

                   if($row['C21'] != null){
          return new PartWorkedOn([
             'job_date'  => DateTime::createFromFormat('d-m-Y', $row['C21'])->format('Y-m-d'),
              'repair_code' => $row['D21'],
              'description' =>  $row[ 'E21'],
              'part_no'  => $row['F21'],
              'quantity'  => $row['G21'],
              'unit_price' => $row['H21'],
              'job_cards' => $row[ 'J7'],
              'cost' => $row['P29'] * 1200,
              'outside_cost' => $row['M14'] + 0,
            ]);
           
           }
    }

 
}