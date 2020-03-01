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

class RowEigthteen implements WithMappedCells,ToModel
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
             'C18' => 'C18',
             'D18' => 'D18',
             'E18' => 'E18',
             'F18' => 'F18',
             'G18' => 'G18',
             'H18' => 'H18',
             'J7'  => 'J7',
             'P26' => 'P26',
             'M14' => 'M14',
             
             
      ];
    }

    
    public function model(array $row)
    {
      $messages = [
        'C18.required' => 'We need to know the Date the repair was perfomed in row 18!',
        'D18.required' => 'We need to know the repair code in row 18!',
        'E18.required' => 'We need to know the Description of the Part worked on in row 18!',
        'F18.required' => 'We need to know the Part or Serial Number in row 18!',
        'G18.required' => 'We need to know the Quantity in row 18 !',
        'H18.required' => 'We need to know the Unit Price in row 18!',
    ];

     if( ($row['C18'] !=null) && ($row['D18'] == null) && ($row[ 'E18'] != null) && ($row['F18'] == null) && ($row['G18'] != null) && ($row['H18'] == null))
     {
       Validator::make($row, [
       'D18' => 'required',
       'F18' => 'required',
       'H18' => 'required',
       ],$messages)->validate();
      }

      if( ($row['C18'] !=null) && ($row['D18'] == null) && ($row[ 'E18'] != null) && ($row['F18'] == null) && ($row['G18'] != null) && ($row['H18'] != null))
      {
        Validator::make($row, [
        'D18' => 'required',
        'F18' => 'required',
        ],$messages)->validate();
       }

      if( ($row['C18'] !=null) && ($row['D18'] == null) && ($row[ 'E18'] == null) && ($row['F18'] == null) && ($row['G18'] != null) && ($row['H18'] != null))
     {
       Validator::make($row, [
       'D18' => 'required',
       'E18' => 'required',
       'F18' => 'required',
       ],$messages)->validate();
      }


      if( ($row['C18'] !=null) && ($row['D18'] == null) && ($row[ 'E18'] == null) && ($row['F18'] == null) && ($row['G18'] != null) && ($row['H18'] != null))
      {
        Validator::make($row, [
        'D18' => 'required',
        'E18' => 'required',
        'F18' => 'required',
        ],$messages)->validate();
       }

      if( ($row['C18'] !=null) && ($row['D18'] == null) && ($row[ 'E18'] == null) && ($row['F18'] != null) && ($row['G18'] != null) && ($row['H18'] != null))
      {
        Validator::make($row, [
        'D18' => 'required',
        'E18' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C18'] !=null) && ($row['D18'] == null) && ($row[ 'E18'] != null) && ($row['F18'] == null) && ($row['G18'] != null) && ($row['H18'] != null))
      {
        Validator::make($row, [
        'D18' => 'required',
        'F18' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C18'] !=null) && ($row['D18'] == null) && ($row[ 'E18'] != null) && ($row['F18'] != null) && ($row['G18'] != null) && ($row['H18'] != null))
       {
         Validator::make($row, [
         'D18' => 'required',
         ],$messages)->validate();
        }
 

       if( ($row['C18'] !=null) && ($row['D18'] == null) && ($row[ 'E18'] == null) && ($row['F18'] != null) && ($row['G18'] == null) && ($row['H18'] != null))
       {
         Validator::make($row, [
         'D18' => 'required',
         'F18' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C18'] ==null) && ($row['D18'] == null) && ($row[ 'E18'] == null) && ($row['F18'] != null) && ($row['G18'] == null) && ($row['H18'] != null))
        {
          Validator::make($row,[
          'C18' => 'required', 
          'D18' => 'required',
          'E18' => 'required',
          'G18' => 'required',
          ],$messages)->validate();
         }

        if( ($row['C18'] !=null) && ($row['D18'] == null) && ($row[ 'E18'] == null) && ($row['F18'] != null) && ($row['G18'] != null) && ($row['H18'] != null))
        {
          Validator::make($row,[
          'D18' => 'required',
          'F18' => 'required',
          ],$messages)->validate();
         }
 

       if( ($row['C18'] !=null) && ($row['D18'] != null) && ($row[ 'E18'] == null) && ($row['F18'] == null) && ($row['G18'] != null) && ($row['H18'] != null))
       {
         Validator::make($row, [
         'E18' => 'required',
         'F18' => 'required',
         ],$messages)->validate();
        }


      if( ($row['C18'] !=null) && ($row['D18'] == null) && ($row[ 'E18'] == null) && ($row['F18'] == null) && ($row['G18'] != null) && ($row['H18'] == null))
      {
        Validator::make($row,[
        'D18' => 'required',
        'E18' => 'required',
        'F18' => 'required',
        'H18' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C18'] !=null) && ($row['D18'] != null) && ($row[ 'E18'] == null) && ($row['F18'] == null) && ($row['G18'] != null) && ($row['H18'] == null))
       {
         Validator::make($row,[
         'E18' => 'required',
         'F18' => 'required',
         'H18' => 'required',
         ],$messages)->validate();
        }

      if( ($row['C18'] !=null) && ($row['D18'] == null) && ($row[ 'E18'] == null) && ($row['F18'] == null) && ($row['G18'] == null) && ($row['H18'] == null))
     {
       Validator::make($row, [
       'D18' => 'required',
       'E18' => 'required',
       'F18' => 'required',
       'G18' => 'required',
       'H18' => 'required',
       ],$messages)->validate();
      }

      if( ($row['C18'] ==null) && ($row['D18'] != null) && ($row[ 'E18'] == null) && ($row['F18'] == null) && ($row['G18'] == null) && ($row['H18'] != null))
      {
        Validator::make($row,[
        'C18' => 'required',
        'E18' => 'required',
        'F18' => 'required',
        'G18' => 'required',
        ],$messages)->validate();
       }


       if( ($row['C18'] ==null) && ($row['D18'] != null) && ($row[ 'E18'] == null) && ($row['F18'] == null) && ($row['G18'] != null) && ($row['H18'] != null))
       {
         Validator::make($row,[
         'C18' => 'required',
         'E18' => 'required',
         'F18' => 'required',
         ],$messages)->validate();
        }
    
      if( ($row['C18'] == null) && ($row['D18'] != null) && ($row[ 'E18'] == null) && ($row['F18'] == null) && ($row['G18'] == null) && ($row['H18'] == null))
      {
        Validator::make($row,[
        'C18' => 'required',
        'E18' => 'required',
        'F18' => 'required',
        'G18' => 'required',
        'H18' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C18'] == null) && ($row['D18'] == null) && ($row[ 'E18'] != null) && ($row['F18'] == null) && ($row['G18'] == null) && ($row['H18'] == null))
      {
        Validator::make($row,[
        'C18' => 'required',
        'D18' => 'required',
        'F18' => 'required',
        'G18' => 'required',
        'H18' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C18'] == null) && ($row['D18'] == null) && ($row[ 'E18'] == null) && ($row['F18'] != null) && ($row['G18'] == null) && ($row['H18'] == null))
       {
         Validator::make($row, [
         'C18' => 'required',
         'D18' => 'required',
         'E18' => 'required',
         'G18' => 'required',
         'H18' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C18'] == null) && ($row['D18'] == null) && ($row[ 'E18'] == null) && ($row['F18'] == null) && ($row['G18'] != null) && ($row['H18'] == null))
        {
          Validator::make($row, [
          'C18' => 'required',
          'D18' => 'required',
          'E18' => 'required',
          'F18' => 'required',
          'H18' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C18'] == null) && ($row['D18'] != null) && ($row[ 'E18'] == null) && ($row['F18'] == null) && ($row['G18'] != null) && ($row['H18'] == null))
         {
           Validator::make($row, [
           'C18' => 'required',
           'E18' => 'required',
           'F18' => 'required',
           'H18' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C18'] == null) && ($row['D18'] != null) && ($row[ 'E18'] == null) && ($row['F18'] == null) && ($row['G18'] != null) && ($row['H18'] == null))
         {
           Validator::make($row,[
           'C18' => 'required',
           'E18' => 'required',
           'F18' => 'required',
           'H18' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C18'] == null) && ($row['D18'] != null) && ($row[ 'E18'] == null) && ($row['F18'] != null) && ($row['G18'] != null) && ($row['H18'] == null))
          {
            Validator::make($row,[
            'C18' => 'required',
            'E17' => 'required',
            'H18' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C18'] == null) && ($row['D18'] != null) && ($row[ 'E18'] == null) && ($row['F18'] != null) && ($row['G18'] == null) && ($row['H18'] == null))
          {
            Validator::make($row,[
            'C18' => 'required',
            'E18' => 'required',
            'G18' => 'required',
            'H18' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C18'] == null) && ($row['D18'] != null) && ($row[ 'E18'] == null) && ($row['F18'] != null) && ($row['G18'] == null) && ($row['H18'] != null))
           {
             Validator::make($row, [
             'C18' => 'required',
             'E18' => 'required',
             'G18' => 'required',
             ],$messages)->validate();
            }

         if( ($row['C18'] != null) && ($row['D18'] == null) && ($row[ 'E18'] == null) && ($row['F18'] == null) && ($row['G18'] != null) && ($row['H18'] == null))
        {
          Validator::make($row,[
          'D18' => 'required',
          'E18' => 'required',
          'F18' => 'required',
          'H18' => 'required',
          ],$messages)->validate();
         }
         
         if( ($row['C18'] != null) && ($row['D18'] != null) && ($row[ 'E18'] == null) && ($row['F18'] != null) && ($row['G18'] == null) && ($row['H18'] != null))
         {
           Validator::make($row, [
           'E18' => 'required',
           'G18' => 'required',
           ],$messages)->validate();
          }

         if( ($row['C18'] != null) && ($row['D18'] != null) && ($row[ 'E18'] == null) && ($row['F18'] == null) && ($row['G18'] != null) && ($row['H18'] == null))
         {
           Validator::make($row, [
           'E18' => 'required',
           'F18' => 'required',
           'H18' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C18'] != null) && ($row['D18'] == null) && ($row[ 'E18'] == null) && ($row['F18'] != null) && ($row['G18'] == null) && ($row['H18'] == null))
          {
            Validator::make($row,[
              'D18' => 'required',
              'E18' => 'required',
              'G18' => 'required',
              'H18' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C18'] != null) && ($row['D18'] != null) && ($row[ 'E18'] == null) && ($row['F18'] != null) && ($row['G18'] == null) && ($row['H18'] == null))
           {
             Validator::make($row, [
               'E18' => 'required',
               'G18' => 'required',
               'H18' => 'required',
             ],$messages)->validate();
            }

          
          
          

         if( ($row['C18'] == null) && ($row['D18'] == null) && ($row[ 'E18'] == null) && ($row['F18'] == null) && ($row['G18'] == null) && ($row['H18'] != null))
         {
           Validator::make($row,[
           'C18' => 'required',
           'D18' => 'required',
           'E18' => 'required',
           'F18' => 'required',
           'G18' => 'required',
           ],$messages)->validate();
          }

         

          if( ($row['C18'] != null) && ($row['D18'] == null) && ($row[ 'E18'] == null) && ($row['F18'] == null) && ($row['G18'] == null) && ($row['H18'] == null))
          {
            Validator::make($row,[
            'D18' => 'required',
            'E18' => 'required',
            'F18' => 'required',
            'G18' => 'required',
            'H18' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C18'] != null) && ($row['D18'] == null) && ($row[ 'E18'] == null) && ($row['F18'] == null) && ($row['G18'] == null) && ($row['H18'] != null))
           {
             Validator::make($row,[
             'D18' => 'required',
             'E18' => 'required',
             'F18' => 'required',
             'G18' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C18'] != null) && ($row['D18'] != null) && ($row[ 'E18'] == null) && ($row['F18'] == null) && ($row['G18'] == null) && ($row['H18'] != null))
            {
              Validator::make($row, [
              'E18' => 'required',
              'F18' => 'required',
              'G18' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C18'] != null) && ($row['D18'] != null) && ($row[ 'E18'] != null) && ($row['F18'] == null) && ($row['G18'] == null) && ($row['H18'] != null))
            {
              Validator::make($row, [
              'F18' => 'required',
              'G18' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C18'] != null) && ($row['D18'] != null) && ($row[ 'E18'] != null) && ($row['F18'] != null) && ($row['G18'] == null) && ($row['H18'] != null))
             {
               Validator::make($row,[
               'G18' => 'required',
               ],$messages)->validate();
              }

            

           if( ($row['C18'] != null) && ($row['D18'] != null) && ($row[ 'E18'] == null) && ($row['F18'] == null) && ($row['G18'] == null) && ($row['H18'] == null))
          {
            Validator::make($row,[
            'E18' => 'required',
            'F18' => 'required',
            'G18' => 'required',
            'H18' => 'required',
            ],$messages)->validate();
           }

           
           if( ($row['C18'] == null) && ($row['D18'] != null) && ($row[ 'E18'] == null) && ($row['F18'] == null) && ($row['G18'] == null) && ($row['H18'] != null))
          {
            Validator::make($row, [
            'C18' => 'required', 
            'E18' => 'required',
            'F18' => 'required',
            'G18' => 'required',
            ],$messages)->validate();
           }

           
          


           if( ($row['C18'] == null) && ($row['D18'] == null) && ($row[ 'E18'] == null) && ($row['F18'] != null) && ($row['G18'] == null) && ($row['H18'] == null))
           {
             Validator::make($row,[
             'C18' => 'required', 
             'D18' => 'required',
             'E18' => 'required',
             'G18' => 'required',
             'H18' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C18'] == null) && ($row['D18'] == null) && ($row[ 'E18'] != null) && ($row['F18'] == null) && ($row['G18'] == null) && ($row['H18'] == null))
            {
              Validator::make($row, [
              'C18' => 'required', 
              'D18' => 'required',
              'F18' => 'required',
              'G18' => 'required',
              'H18' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C18'] == null) && ($row['D18'] == null) && ($row[ 'E18'] != null) && ($row['F18'] == null) && ($row['G18'] != null) && ($row['H18'] == null))
             {
               Validator::make($row,[
               'C18' => 'required', 
               'D18' => 'required',
               'F18' => 'required',
               'H18' => 'required',
               ],$messages)->validate();
              }

              if( ($row['C18'] == null) && ($row['D18'] != null) && ($row[ 'E18'] != null) && ($row['F18'] == null) && ($row['G18'] == null) && ($row['H18'] == null))
             {
               Validator::make($row,[
               'C18' => 'required', 
               'F18' => 'required',
               'G18' => 'required',
               'H18' => 'required',
               ],$messages)->validate();
              }

             if( ($row['C18'] == null) && ($row['D18'] != null) && ($row[ 'E18'] == null) && ($row['F18'] != null) && ($row['G18'] == null) && ($row['H18'] == null))
            {
              Validator::make($row, [
              'C18' => 'required', 
              'G18' => 'required',
              'H18' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C18'] == null) && ($row['D18'] == null) && ($row[ 'E18'] != null) && ($row['F18'] == null) && ($row['G18'] == null) && ($row['H18'] != null))
             {
               Validator::make($row,[
               'C18' => 'required', 
               'D18' => 'required',
               'F18' => 'required',
               'G18' => 'required',
               ],$messages)->validate();
              }
 
             if( ($row['C18'] == null) && ($row['D18'] != null) && ($row[ 'E18'] == null) && ($row['F18'] == null) && ($row['G18'] == null) && ($row['H18'] == null))
            {
              Validator::make($row,[
              'C18' => 'required', 
              'E18' => 'required',
              'F18' => 'required',
              'G18' => 'required',
              'H18' => 'required',
              ],$messages)->validate();
             }

           if( ($row['C18'] != null) && ($row['D18'] != null) && ($row[ 'E18'] != null) && ($row['F18'] == null) && ($row['G18'] == null) && ($row['H18'] == null))
           {
             Validator::make($row, [
             'F18' => 'required',
             'G18' => 'required',
             'H18' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C18'] != null) && ($row['D18'] != null) && ($row[ 'E18'] != null) && ($row['F18'] != null) && ($row['G18'] == null) && ($row['H18'] == null))
           {
             Validator::make($row,[
             'G18' => 'required',
             'H18' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C18'] != null) && ($row['D18'] != null) && ($row[ 'E18'] != null) && ($row['F18'] != null) && ($row['G18'] != null) && ($row['H18'] == null))
            {
              Validator::make($row, [
              'H18' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C18'] == null) && ($row['D18'] == null) && ($row[ 'E18'] == null) && ($row['F18'] == null) && ($row['G18'] != null) && ($row['H18'] == null))
            {
              Validator::make($row,[
              'C18' => 'required',
              'D18' => 'required',
              'E18' => 'required',
              'F18' => 'required',
              'H18' => 'required',
              ],$messages)->validate();
             }

          if( ($row['C18'] == null) && ($row['D18'] == null) && ($row[ 'E18'] == null) && ($row['F18'] == null) && ($row['G18'] == null) && ($row['H18'] != null))
         {
           Validator::make($row, [
           'C18' => 'required',
           'D18' => 'required',
           'E18' => 'required',
           'F18' => 'required',
           'G18' => 'required',
           ],$messages)->validate();
          }
         if( ($row['C18'] == null) && ($row['D18'] == null) && ($row[ 'E18'] == null) && ($row['F18'] == null) && ($row['G18'] != null) && ($row['H18'] != null))
        {
          Validator::make($row, [
          'C18' => 'required',
          'D18' => 'required',
          'E18' => 'required',
          'F18' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C18'] == null) && ($row['D18'] == null) && ($row[ 'E18'] == null) && ($row['F18'] == null) && ($row['G18'] != null) && ($row['H18'] != null))
         {
           Validator::make($row,[
           'C18' => 'required',
           'D18' => 'required',
           'E18' => 'required',
           'F18' => 'required',
           ],$messages)->validate();
          }
 

        if( ($row['C18'] == null) && ($row['D18'] == null) && ($row[ 'E18'] == null) && ($row['F18'] != null) && ($row['G18'] != null) && ($row['H18'] == null))
        {
          Validator::make($row, [
          'C18' => 'required',
          'D18' => 'required',
          'E18' => 'required',
          'H18' => 'required',
          ],$messages)->validate();
         }


         if( ($row['C18'] == null) && ($row['D18'] == null) && ($row[ 'E18'] == null) && ($row['F18'] != null) && ($row['G18'] != null) && ($row['H18'] != null))
        {
          Validator::make($row, [
          'C18' => 'required',
          'D18' => 'required',
          'E18' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C18'] == null) && ($row['D18'] == null) && ($row[ 'E18'] == null) && ($row['F18'] != null) && ($row['G18'] != null) && ($row['H18'] != null))
         {
           Validator::make($row, [
           'C18' => 'required',
           'D18' => 'required',
           'E18' => 'required',
           ],$messages)->validate();
          }

       if( ($row['C18'] == null) && ($row['D18'] == null) && ($row[ 'E18'] != null) && ($row['F18'] != null) && ($row['G18'] == null) && ($row['H18'] == null))
       {
         Validator::make($row, [
         'C18' => 'required',
         'G18' => 'required',
         'H18' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C18'] == null) && ($row['D18'] == null) && ($row[ 'E18'] != null) && ($row['F18'] != null) && ($row['G18'] != null) && ($row['H18'] == null))
       {
         Validator::make($row,[
         'C18' => 'required',
         'D18' => 'required',
         'H18' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C18'] == null) && ($row['D18'] == null) && ($row[ 'E18'] != null) && ($row['F18'] != null) && ($row['G18'] != null) && ($row['H18'] != null))
        {
          Validator::make($row, [
          'C18' => 'required',
          'D18' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C18'] == null) && ($row['D18'] == null) && ($row[ 'E18'] != null) && ($row['F18'] != null) && ($row['G18'] != null) && ($row['H18'] != null))
        {
          Validator::make($row,[
          'C18' => 'required',
          'D18' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C18'] == null) && ($row['D18'] == null) && ($row[ 'E18'] != null) && ($row['F18'] != null) && ($row['G18'] != null) && ($row['H18'] != null))
        {
          Validator::make($row, [
          'C18' => 'required',
          'D18' => 'required',
          ],$messages)->validate();
         }

       if( ($row['C18'] == null) && ($row['D18'] != null) && ($row[ 'E18'] != null) && ($row['F18'] == null) && ($row['G18'] == null) && ($row['H18'] == null))
       {
         Validator::make($row,[
         'C18' => 'required',
         'F18' => 'required',
         'G18' => 'required',
         'H18' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C18'] == null) && ($row['D18'] != null) && ($row[ 'E18'] != null) && ($row['F18'] != null) && ($row['G18'] == null) && ($row['H18'] == null))
       {
         Validator::make($row, [
         'C18' => 'required',
         'G18' => 'required',
         'H18' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C18'] == null) && ($row['D18'] != null) && ($row[ 'E18'] != null) && ($row['F18'] != null) && ($row['G18'] != null) && ($row['H18'] == null))
        {
          Validator::make($row,[
          'C18' => 'required',
          'H18' => 'required',
          ],$messages)->validate();
         }

        

          if( ($row['C18'] == null) && ($row['D18'] != null) && ($row[ 'E18'] != null) && ($row['F18'] != null) && ($row['G18'] != null) && ($row['H18'] != null))
          {
            Validator::make($row,[
            'C18' => 'required',
            ],$messages)->validate();
           }
      
            if( ($row['C18']!=null) && ($row['D18'] != null) && ($row[ 'E18'] == null) && ($row['F18'] == null) && ($row['G18'] == null) && ($row['H18'] == null))
            {
              Validator::make($row, [
               'E18' => 'required',
                'F18' => 'required',
               'G18' => 'required',
               'H18' => 'required',
              ],$messages)->validate();
              }
        
              if( ($row['C18']!=null) && ($row['D18'] != null) && ($row[ 'E18'] != null) && ($row['F18'] == null) && ($row['G18'] == null) && ($row['H18'] == null))
              {
                Validator::make($row,[
                  'F18' => 'required',
                 'G18' => 'required',
                 'H18' => 'required',
                ],$messages)->validate();
                }

                if( ($row['C18']==null) && ($row['D18'] == null) && ($row[ 'E18'] == null) && ($row['F18'] != null) && ($row['G18'] == null) && ($row['H18'] == null))
              {
                Validator::make($row, [
                  'C18' => 'required',
                 'D18' => 'required',
                 'E18' => 'required',
                  'G18' => 'required',
                  'H18' => 'required',
                ],$messages)->validate();
                }
                if( ($row['C18']!=null) && ($row['D18'] != null) && ($row[ 'E18'] == null) && ($row['F18'] != null) && ($row['G18'] != null) && ($row['H18'] != null))
                {
                  Validator::make($row, [
                   'E18' => 'required',
                  ],$messages)->validate();
                  }

                  if( ($row['C18']!=null) && ($row['D18'] != null) && ($row[ 'E18'] != null) && ($row['F18'] != null) && ($row['G18'] == null) && ($row['H18'] != null))
                {
                  Validator::make($row, [
                   'G18' => 'required',
                  ],$messages)->validate();
                  }

                  
                  if( ($row['C18']!=null) && ($row['D18'] != null) && ($row[ 'E18'] != null) && ($row['F18'] == null) && ($row['G18'] != null) && ($row['H18'] != null))
                {
                  Validator::make($row, [
                   'F18' => 'required',
                  ],$messages)->validate();
                  }



                if( ($row['C18']!=null) && ($row['D18'] != null) && ($row[ 'E18'] != null) && ($row['F18'] != null) && ($row['G18'] == null) && ($row['H18'] == null))
              {
                Validator::make($row,[
                 'G18' => 'required',
                 'H18' => 'required',
                ],$messages)->validate();
                }

                if( ($row['C18']!=null) && ($row['D18'] != null) && ($row[ 'E18'] != null) && ($row['F18'] != null) && ($row['G18'] != null) && ($row['H18'] == null))
                {
                  Validator::make($row, [
                   'H18' => 'required',
                  ],$messages)->validate();
                  }

                 
                 // $d2 = DateTime::createFromFormat('d-m-Y', $row['C18'])->format('Y-m-d')? "" : null;
                  // dd(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['C14'])? "" : null);

                   if($row['C18'] != null){
          return new PartWorkedOn([
             'job_date'  => DateTime::createFromFormat('d-m-Y', $row['C18'])->format('Y-m-d'),
              'repair_code' => $row['D18'],
              'description' =>  $row[ 'E18'],
              'part_no'  => $row['F18'],
              'quantity'  => $row['G18'],
              'unit_price' => $row['H18'],
              'job_cards' => $row[ 'J7'],
              'cost' => $row['P26'] * 1200,
              'outside_cost' => $row['M14'] + 0,
            ]);
           
           }
    }

 
}