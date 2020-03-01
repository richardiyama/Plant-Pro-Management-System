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
class RowTwenty implements WithMappedCells,ToModel
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
             'C20' => 'C20',
             'D20' => 'D20',
             'E20' => 'E20',
             'F20' => 'F20',
             'G20' => 'G20',
             'H20' => 'H20',
             'J7'  => 'J7',
             'P28' => 'P28',
             'M14' => 'M14',
             
             
      ];
    }

    
    public function model(array $row)
    {
      $messages = [
        'C20.required' => 'We need to know the Date the repair was perfomed in row 20!',
        'D20.required' => 'We need to know the repair code in row 20!',
        'E20.required' => 'We need to know the Description of the Part worked on in row 20!',
        'F20.required' => 'We need to know the Part or Serial Number in row 20!',
        'G20.required' => 'We need to know the Quantity in row 20 !',
        'H20.required' => 'We need to know the Unit Price in row 20!',
    ];

     if( ($row['C20'] !=null) && ($row['D20'] == null) && ($row[ 'E20'] != null) && ($row['F20'] == null) && ($row['G20'] != null) && ($row['H20'] == null))
     {
       Validator::make($row, [
       'D20' => 'required',
       'F20' => 'required',
       'H20' => 'required',
       ],$messages)->validate();
      }

      if( ($row['C20'] !=null) && ($row['D20'] == null) && ($row[ 'E20'] != null) && ($row['F20'] == null) && ($row['G20'] != null) && ($row['H20'] != null))
      {
        Validator::make($row, [
        'D20' => 'required',
        'F20' => 'required',
        ],$messages)->validate();
       }

      if( ($row['C20'] !=null) && ($row['D20'] == null) && ($row[ 'E20'] == null) && ($row['F20'] == null) && ($row['G20'] != null) && ($row['H20'] != null))
     {
       Validator::make($row, [
       'D20' => 'required',
       'E20' => 'required',
       'F20' => 'required',
       ],$messages)->validate();
      }


      if( ($row['C20'] !=null) && ($row['D20'] == null) && ($row[ 'E20'] == null) && ($row['F20'] == null) && ($row['G20'] != null) && ($row['H20'] != null))
      {
        Validator::make($row, [
        'D20' => 'required',
        'E20' => 'required',
        'F20' => 'required',
        ],$messages)->validate();
       }

      if( ($row['C20'] !=null) && ($row['D20'] == null) && ($row[ 'E20'] == null) && ($row['F20'] != null) && ($row['G20'] != null) && ($row['H20'] != null))
      {
        Validator::make($row, [
        'D20' => 'required',
        'E20' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C20'] !=null) && ($row['D20'] == null) && ($row[ 'E20'] != null) && ($row['F20'] == null) && ($row['G20'] != null) && ($row['H20'] != null))
      {
        Validator::make($row, [
        'D20' => 'required',
        'F20' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C20'] !=null) && ($row['D20'] == null) && ($row[ 'E20'] != null) && ($row['F20'] != null) && ($row['G20'] != null) && ($row['H20'] != null))
       {
         Validator::make($row, [
         'D20' => 'required',
         ],$messages)->validate();
        }
 

       if( ($row['C20'] !=null) && ($row['D20'] == null) && ($row[ 'E20'] == null) && ($row['F20'] != null) && ($row['G20'] == null) && ($row['H20'] != null))
       {
         Validator::make($row, [
         'D20' => 'required',
         'F20' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C20'] ==null) && ($row['D20'] == null) && ($row[ 'E20'] == null) && ($row['F20'] != null) && ($row['G20'] == null) && ($row['H20'] != null))
        {
          Validator::make($row,[
          'C20' => 'required', 
          'D20' => 'required',
          'E20' => 'required',
          'G20' => 'required',
          ],$messages)->validate();
         }

        if( ($row['C20'] !=null) && ($row['D20'] == null) && ($row[ 'E20'] == null) && ($row['F20'] != null) && ($row['G20'] != null) && ($row['H20'] != null))
        {
          Validator::make($row,[
          'D20' => 'required',
          'F20' => 'required',
          ],$messages)->validate();
         }
 

       if( ($row['C20'] !=null) && ($row['D20'] != null) && ($row[ 'E20'] == null) && ($row['F20'] == null) && ($row['G20'] != null) && ($row['H20'] != null))
       {
         Validator::make($row, [
         'E20' => 'required',
         'F20' => 'required',
         ],$messages)->validate();
        }


      if( ($row['C20'] !=null) && ($row['D20'] == null) && ($row[ 'E20'] == null) && ($row['F20'] == null) && ($row['G20'] != null) && ($row['H20'] == null))
      {
        Validator::make($row,[
        'D20' => 'required',
        'E20' => 'required',
        'F20' => 'required',
        'H20' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C20'] !=null) && ($row['D20'] != null) && ($row[ 'E20'] == null) && ($row['F20'] == null) && ($row['G20'] != null) && ($row['H20'] == null))
       {
         Validator::make($row,[
         'E20' => 'required',
         'F20' => 'required',
         'H20' => 'required',
         ],$messages)->validate();
        }

      if( ($row['C20'] !=null) && ($row['D20'] == null) && ($row[ 'E20'] == null) && ($row['F20'] == null) && ($row['G20'] == null) && ($row['H20'] == null))
     {
       Validator::make($row, [
       'D20' => 'required',
       'E20' => 'required',
       'F20' => 'required',
       'G20' => 'required',
       'H20' => 'required',
       ],$messages)->validate();
      }

      if( ($row['C20'] ==null) && ($row['D20'] != null) && ($row[ 'E20'] == null) && ($row['F20'] == null) && ($row['G20'] == null) && ($row['H20'] != null))
      {
        Validator::make($row,[
        'C20' => 'required',
        'E20' => 'required',
        'F20' => 'required',
        'G20' => 'required',
        ],$messages)->validate();
       }


       if( ($row['C20'] ==null) && ($row['D20'] != null) && ($row[ 'E20'] == null) && ($row['F20'] == null) && ($row['G20'] != null) && ($row['H20'] != null))
       {
         Validator::make($row,[
         'C20' => 'required',
         'E20' => 'required',
         'F20' => 'required',
         ],$messages)->validate();
        }
    
      if( ($row['C20'] == null) && ($row['D20'] != null) && ($row[ 'E20'] == null) && ($row['F20'] == null) && ($row['G20'] == null) && ($row['H20'] == null))
      {
        Validator::make($row,[
        'C20' => 'required',
        'E20' => 'required',
        'F20' => 'required',
        'G20' => 'required',
        'H20' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C20'] == null) && ($row['D20'] == null) && ($row[ 'E20'] != null) && ($row['F20'] == null) && ($row['G20'] == null) && ($row['H20'] == null))
      {
        Validator::make($row,[
        'C20' => 'required',
        'D20' => 'required',
        'F20' => 'required',
        'G20' => 'required',
        'H20' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C20'] == null) && ($row['D20'] == null) && ($row[ 'E20'] == null) && ($row['F20'] != null) && ($row['G20'] == null) && ($row['H20'] == null))
       {
         Validator::make($row, [
         'C20' => 'required',
         'D20' => 'required',
         'E20' => 'required',
         'G20' => 'required',
         'H20' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C20'] == null) && ($row['D20'] == null) && ($row[ 'E20'] == null) && ($row['F20'] == null) && ($row['G20'] != null) && ($row['H20'] == null))
        {
          Validator::make($row, [
          'C20' => 'required',
          'D20' => 'required',
          'E20' => 'required',
          'F20' => 'required',
          'H20' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C20'] == null) && ($row['D20'] != null) && ($row[ 'E20'] == null) && ($row['F20'] == null) && ($row['G20'] != null) && ($row['H20'] == null))
         {
           Validator::make($row, [
           'C20' => 'required',
           'E20' => 'required',
           'F20' => 'required',
           'H20' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C20'] == null) && ($row['D20'] != null) && ($row[ 'E20'] == null) && ($row['F20'] == null) && ($row['G20'] != null) && ($row['H20'] == null))
         {
           Validator::make($row,[
           'C20' => 'required',
           'E20' => 'required',
           'F20' => 'required',
           'H20' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C20'] == null) && ($row['D20'] != null) && ($row[ 'E20'] == null) && ($row['F20'] != null) && ($row['G20'] != null) && ($row['H20'] == null))
          {
            Validator::make($row,[
            'C20' => 'required',
            'E20' => 'required',
            'H20' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C20'] == null) && ($row['D20'] != null) && ($row[ 'E20'] == null) && ($row['F20'] != null) && ($row['G20'] == null) && ($row['H20'] == null) )
          {
            Validator::make($row,[
            'C20' => 'required',
            'E20' => 'required',
            'G20' => 'required',
            'H20' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C20'] == null) && ($row['D20'] != null) && ($row[ 'E20'] == null) && ($row['F20'] != null) && ($row['G20'] == null) && ($row['H20'] != null))
           {
             Validator::make($row, [
             'C20' => 'required',
             'E20' => 'required',
             'G20' => 'required',
             ],$messages)->validate();
            }

         if( ($row['C20'] != null) && ($row['D20'] == null) && ($row[ 'E20'] == null) && ($row['F20'] == null) && ($row['G20'] != null) && ($row['H20'] == null) )
        {
          Validator::make($row,[
          'D20' => 'required',
          'E20' => 'required',
          'F20' => 'required',
          'H20' => 'required',
          ],$messages)->validate();
         }
         
         if( ($row['C20'] != null) && ($row['D20'] != null) && ($row[ 'E20'] == null) && ($row['F20'] != null) && ($row['G20'] == null) && ($row['H20'] != null))
         {
           Validator::make($row, [
           'E20' => 'required',
           'G20' => 'required',
           ],$messages)->validate();
          }

         if( ($row['C20'] != null) && ($row['D20'] != null) && ($row[ 'E20'] == null) && ($row['F20'] == null) && ($row['G20'] != null) && ($row['H20'] == null))
         {
           Validator::make($row, [
           'E20' => 'required',
           'F20' => 'required',
           'H20' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C20'] != null) && ($row['D20'] == null) && ($row[ 'E20'] == null) && ($row['F20'] != null) && ($row['G20'] == null) && ($row['H20'] == null))
          {
            Validator::make($row,[
              'D20' => 'required',
              'E20' => 'required',
              'G20' => 'required',
              'H20' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C20'] != null) && ($row['D20'] != null) && ($row[ 'E20'] == null) && ($row['F20'] != null) && ($row['G20'] == null) && ($row['H20'] == null))
           {
             Validator::make($row, [
               'E20' => 'required',
               'G20' => 'required',
               'H20' => 'required',
             ],$messages)->validate();
            }

          
          
          

         if( ($row['C20'] == null) && ($row['D20'] == null) && ($row[ 'E20'] == null) && ($row['F20'] == null) && ($row['G20'] == null) && ($row['H20'] != null))
         {
           Validator::make($row,[
           'C20' => 'required',
           'D20' => 'required',
           'E20' => 'required',
           'F20' => 'required',
           'G20' => 'required',
           ],$messages)->validate();
          }

       

          if( ($row['C20'] != null) && ($row['D20'] == null) && ($row[ 'E20'] == null) && ($row['F20'] == null) && ($row['G20'] == null) && ($row['H20'] == null))
          {
            Validator::make($row,[
            'D20' => 'required',
            'E20' => 'required',
            'F20' => 'required',
            'G20' => 'required',
            'H20' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C20'] != null) && ($row['D20'] == null) && ($row[ 'E20'] == null) && ($row['F20'] == null) && ($row['G20'] == null) && ($row['H20'] != null))
           {
             Validator::make($row,[
             'D20' => 'required',
             'E20' => 'required',
             'F20' => 'required',
             'G20' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C20'] != null) && ($row['D20'] != null) && ($row[ 'E20'] == null) && ($row['F20'] == null) && ($row['G20'] == null) && ($row['H20'] != null))
            {
              Validator::make($row, [
              'E20' => 'required',
              'F20' => 'required',
              'G20' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C20'] != null) && ($row['D20'] != null) && ($row[ 'E20'] != null) && ($row['F20'] == null) && ($row['G20'] == null) && ($row['H20'] != null))
            {
              Validator::make($row, [
              'F20' => 'required',
              'G20' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C20'] != null) && ($row['D20'] != null) && ($row[ 'E20'] != null) && ($row['F20'] != null) && ($row['G20'] == null) && ($row['H20'] != null))
             {
               Validator::make($row,[
               'G20' => 'required',
               ],$messages)->validate();
              }

            

           if( ($row['C20'] != null) && ($row['D20'] != null) && ($row[ 'E20'] == null) && ($row['F20'] == null) && ($row['G20'] == null) && ($row['H20'] == null))
          {
            Validator::make($row,[
            'E20' => 'required',
            'F20' => 'required',
            'G20' => 'required',
            'H20' => 'required',
            ],$messages)->validate();
           }

           
           if( ($row['C20'] == null) && ($row['D20'] != null) && ($row[ 'E20'] == null) && ($row['F20'] == null) && ($row['G20'] == null) && ($row['H20'] != null))
          {
            Validator::make($row, [
            'C20' => 'required', 
            'E20' => 'required',
            'F20' => 'required',
            'G20' => 'required',
            ],$messages)->validate();
           }

           
          


           if( ($row['C20'] == null) && ($row['D20'] == null) && ($row[ 'E20'] == null) && ($row['F20'] != null) && ($row['G20'] == null) && ($row['H20'] == null))
           {
             Validator::make($row,[
             'C20' => 'required', 
             'D20' => 'required',
             'E20' => 'required',
             'G20' => 'required',
             'H20' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C20'] == null) && ($row['D20'] == null) && ($row[ 'E20'] != null) && ($row['F20'] == null) && ($row['G20'] == null) && ($row['H20'] == null))
            {
              Validator::make($row, [
              'C20' => 'required', 
              'D20' => 'required',
              'F20' => 'required',
              'G20' => 'required',
              'H20' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C20'] == null) && ($row['D20'] == null) && ($row[ 'E20'] != null) && ($row['F20'] == null) && ($row['G20'] != null) && ($row['H20'] == null))
             {
               Validator::make($row,[
               'C20' => 'required', 
               'D20' => 'required',
               'F20' => 'required',
               'H20' => 'required',
               ],$messages)->validate();
              }

              if( ($row['C20'] == null) && ($row['D20'] != null) && ($row[ 'E20'] != null) && ($row['F20'] == null) && ($row['G20'] == null) && ($row['H20'] == null))
             {
               Validator::make($row,[
               'C20' => 'required', 
               'F20' => 'required',
               'G20' => 'required',
               'H20' => 'required',
               ],$messages)->validate();
              }

             if( ($row['C20'] == null) && ($row['D20'] != null) && ($row[ 'E20'] == null) && ($row['F20'] != null) && ($row['G20'] == null) && ($row['H20'] == null) )
            {
              Validator::make($row, [
              'C20' => 'required', 
              'G20' => 'required',
              'H20' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C20'] == null) && ($row['D20'] == null) && ($row[ 'E20'] != null) && ($row['F20'] == null) && ($row['G20'] == null) && ($row['H20'] != null))
             {
               Validator::make($row,[
               'C20' => 'required', 
               'D20' => 'required',
               'F20' => 'required',
               'G20' => 'required',
               ],$messages)->validate();
              }
 
             if( ($row['C20'] == null) && ($row['D20'] != null) && ($row[ 'E20'] == null) && ($row['F20'] == null) && ($row['G20'] == null) && ($row['H20'] == null))
            {
              Validator::make($row,[
              'C20' => 'required', 
              'E20' => 'required',
              'F20' => 'required',
              'G20' => 'required',
              'H20' => 'required',
              ],$messages)->validate();
             }

           if( ($row['C20'] != null) && ($row['D20'] != null) && ($row[ 'E20'] != null) && ($row['F20'] == null) && ($row['G20'] == null) && ($row['H20'] == null))
           {
             Validator::make($row, [
             'F20' => 'required',
             'G20' => 'required',
             'H20' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C20'] != null) && ($row['D20'] != null) && ($row[ 'E20'] != null) && ($row['F20'] != null) && ($row['G20'] == null) && ($row['H20'] == null))
           {
             Validator::make($row,[
             'G20' => 'required',
             'H20' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C20'] != null) && ($row['D20'] != null) && ($row[ 'E20'] != null) && ($row['F20'] != null) && ($row['G20'] != null) && ($row['H20'] == null))
            {
              Validator::make($row, [
              'H20' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C20'] == null) && ($row['D20'] == null) && ($row[ 'E20'] == null) && ($row['F20'] == null) && ($row['G20'] != null) && ($row['H20'] == null))
            {
              Validator::make($row,[
              'C20' => 'required',
              'D20' => 'required',
              'E20' => 'required',
              'F20' => 'required',
              'H20' => 'required',
              ],$messages)->validate();
             }

          if( ($row['C20'] == null) && ($row['D20'] == null) && ($row[ 'E20'] == null) && ($row['F20'] == null) && ($row['G20'] == null) && ($row['H20'] != null))
         {
           Validator::make($row, [
           'C20' => 'required',
           'D20' => 'required',
           'E20' => 'required',
           'F20' => 'required',
           'G20' => 'required',
           ],$messages)->validate();
          }
         if( ($row['C20'] == null) && ($row['D20'] == null) && ($row[ 'E20'] == null) && ($row['F20'] == null) && ($row['G20'] != null) && ($row['H20'] != null))
        {
          Validator::make($row, [
          'C20' => 'required',
          'D20' => 'required',
          'E20' => 'required',
          'F20' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C20'] == null) && ($row['D20'] == null) && ($row[ 'E20'] == null) && ($row['F20'] == null) && ($row['G20'] != null) && ($row['H20'] != null))
         {
           Validator::make($row,[
           'C20' => 'required',
           'D20' => 'required',
           'E20' => 'required',
           'F20' => 'required',
           ],$messages)->validate();
          }
 

        if( ($row['C20'] == null) && ($row['D20'] == null) && ($row[ 'E20'] == null) && ($row['F20'] != null) && ($row['G20'] != null) && ($row['H20'] == null))
        {
          Validator::make($row, [
          'C20' => 'required',
          'D20' => 'required',
          'E20' => 'required',
          'H20' => 'required',
          ],$messages)->validate();
         }


         if( ($row['C20'] == null) && ($row['D20'] == null) && ($row[ 'E20'] == null) && ($row['F20'] != null) && ($row['G20'] != null) && ($row['H20'] != null))
        {
          Validator::make($row, [
          'C20' => 'required',
          'D20' => 'required',
          'E20' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C20'] == null) && ($row['D20'] == null) && ($row[ 'E20'] == null) && ($row['F20'] != null) && ($row['G20'] != null) && ($row['H20'] != null))
         {
           Validator::make($row, [
           'C20' => 'required',
           'D20' => 'required',
           'E20' => 'required',
           ],$messages)->validate();
          }

       if( ($row['C20'] == null) && ($row['D20'] == null) && ($row[ 'E20'] != null) && ($row['F20'] != null) && ($row['G20'] == null) && ($row['H20'] == null))
       {
         Validator::make($row, [
         'C20' => 'required',
         'G20' => 'required',
         'H20' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C20'] == null) && ($row['D20'] == null) && ($row[ 'E20'] != null) && ($row['F20'] != null) && ($row['G20'] != null) && ($row['H20'] == null))
       {
         Validator::make($row,[
         'C20' => 'required',
         'D20' => 'required',
         'H20' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C20'] == null) && ($row['D20'] == null) && ($row[ 'E20'] != null) && ($row['F20'] != null) && ($row['G20'] != null) && ($row['H20'] != null))
        {
          Validator::make($row, [
          'C20' => 'required',
          'D20' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C20'] == null) && ($row['D20'] == null) && ($row[ 'E20'] != null) && ($row['F20'] != null) && ($row['G20'] != null) && ($row['H20'] != null))
        {
          Validator::make($row,[
          'C20' => 'required',
          'D20' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C20'] == null) && ($row['D20'] == null) && ($row[ 'E20'] != null) && ($row['F20'] != null) && ($row['G20'] != null) && ($row['H20'] != null))
        {
          Validator::make($row, [
          'C20' => 'required',
          'D20' => 'required',
          ],$messages)->validate();
         }

       if( ($row['C20'] == null) && ($row['D20'] != null) && ($row[ 'E20'] != null) && ($row['F20'] == null) && ($row['G20'] == null) && ($row['H20'] == null))
       {
         Validator::make($row,[
         'C20' => 'required',
         'F20' => 'required',
         'G20' => 'required',
         'H20' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C20'] == null) && ($row['D20'] != null) && ($row[ 'E20'] != null) && ($row['F20'] != null) && ($row['G20'] == null) && ($row['H20'] == null))
       {
         Validator::make($row, [
         'C20' => 'required',
         'G20' => 'required',
         'H20' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C20'] == null) && ($row['D20'] != null) && ($row[ 'E20'] != null) && ($row['F20'] != null) && ($row['G20'] != null) && ($row['H20'] == null))
        {
          Validator::make($row,[
          'C20' => 'required',
          'H20' => 'required',
          ],$messages)->validate();
         }

        

          if( ($row['C20'] == null) && ($row['D20'] != null) && ($row[ 'E20'] != null) && ($row['F20'] != null) && ($row['G20'] != null) && ($row['H20'] != null))
          {
            Validator::make($row,[
            'C20' => 'required',
            ],$messages)->validate();
           }
      
            if( ($row['C20']!=null) && ($row['D20'] != null) && ($row[ 'E20'] == null) && ($row['F20'] == null) && ($row['G20'] == null) && ($row['H20'] == null))
            {
              Validator::make($row, [
               'E20' => 'required',
                'F20' => 'required',
               'G20' => 'required',
               'H20' => 'required',
              ],$messages)->validate();
              }
        
              if( ($row['C20']!=null) && ($row['D20'] != null) && ($row[ 'E20'] != null) && ($row['F20'] == null) && ($row['G20'] == null) && ($row['H20'] == null))
              {
                Validator::make($row,[
                  'F20' => 'required',
                 'G20' => 'required',
                 'H20' => 'required',
                ],$messages)->validate();
                }

                if( ($row['C20']==null) && ($row['D20'] == null) && ($row[ 'E20'] == null) && ($row['F20'] != null) && ($row['G20'] == null) && ($row['H20'] == null))
              {
                Validator::make($row, [
                  'C20' => 'required',
                 'D20' => 'required',
                 'E20' => 'required',
                  'G20' => 'required',
                  'H20' => 'required',
                ],$messages)->validate();
                }
                if( ($row['C20']!=null) && ($row['D20'] != null) && ($row[ 'E20'] == null) && ($row['F20'] != null) && ($row['G20'] != null) && ($row['H20'] != null))
                {
                  Validator::make($row, [
                   'E20' => 'required',
                  ],$messages)->validate();
                  }

                  if( ($row['C20']!=null) && ($row['D20'] != null) && ($row[ 'E20'] != null) && ($row['F20'] != null) && ($row['G20'] == null) && ($row['H20'] != null))
                {
                  Validator::make($row, [
                   'G20' => 'required',
                  ],$messages)->validate();
                  }

                  
                  if( ($row['C20']!=null) && ($row['D20'] != null) && ($row[ 'E20'] != null) && ($row['F20'] == null) && ($row['G20'] != null) && ($row['H20'] != null))
                {
                  Validator::make($row, [
                   'F20' => 'required',
                  ],$messages)->validate();
                  }



                if( ($row['C20']!=null) && ($row['D20'] != null) && ($row[ 'E20'] != null) && ($row['F20'] != null) && ($row['G20'] == null) && ($row['H20'] == null))
              {
                Validator::make($row,[
                 'G20' => 'required',
                 'H20' => 'required',
                ],$messages)->validate();
                }

                if( ($row['C20']!=null) && ($row['D20'] != null) && ($row[ 'E20'] != null) && ($row['F20'] != null) && ($row['G20'] != null) && ($row['H20'] == null))
                {
                  Validator::make($row, [
                   'H20' => 'required',
                  ],$messages)->validate();
                  }

                  
                 
                  //$d2 = DateTime::createFromFormat('d-m-Y', $row['C20'])->format('Y-m-d')? "" : null;
                  // dd(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['C14'])? "" : null);

                   if($row['C20'] != null){
          return new PartWorkedOn([
             'job_date'  => DateTime::createFromFormat('d-m-Y', $row['C20'])->format('Y-m-d'),
              'repair_code' => $row['D20'],
              'description' =>  $row[ 'E20'],
              'part_no'  => $row['F20'],
              'quantity'  => $row['G20'],
              'unit_price' => $row['H20'],
              'job_cards' => $row[ 'J7'],
              'cost' => $row['P28'] * 1200,
              'outside_cost' => $row['M14'] + 0,
            ]);
           
           }
    }

 
}