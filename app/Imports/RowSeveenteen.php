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
class RowSeveenteen implements WithMappedCells,ToModel
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
             'C17' => 'C17',
             'D17' => 'D17',
             'E17' => 'E17',
             'F17' => 'F17',
             'G17' => 'G17',
             'H17' => 'H17',
             'J7'  => 'J7',
             'P25' => 'P25',
             'M14' => 'M14',
             
      ];
    }

    
    public function model(array $row)
    {
      $messages = [
        'C17.required' => 'We need to know the Date the repair was perfomed in row 17!',
        'D17.required' => 'We need to know the repair code in row 17!',
        'E17.required' => 'We need to know the Description of the Part worked on in row 17!',
        'F17.required' => 'We need to know the Part or Serial Number in row 17!',
        'G17.required' => 'We need to know the Quantity in row 17 !',
        'H17.required' => 'We need to know the Unit Price in row 17!',
    ];

     if( ($row['C17'] !=null) && ($row['D17'] == null) && ($row[ 'E17'] != null) && ($row['F17'] == null) && ($row['G17'] != null) && ($row['H17'] == null))
     {
       Validator::make($row, [
       'D17' => 'required',
       'F17' => 'required',
       'H17' => 'required',
       ],$messages)->validate();
      }

      if( ($row['C17'] !=null) && ($row['D17'] == null) && ($row[ 'E17'] != null) && ($row['F17'] == null) && ($row['G17'] != null) && ($row['H17'] != null))
      {
        Validator::make($row, [
        'D17' => 'required',
        'F17' => 'required',
        ],$messages)->validate();
       }

      if( ($row['C17'] !=null) && ($row['D17'] == null) && ($row[ 'E17'] == null) && ($row['F17'] == null) && ($row['G17'] != null) && ($row['H17'] != null))
     {
       Validator::make($row, [
       'D17' => 'required',
       'E17' => 'required',
       'F17' => 'required',
       ],$messages)->validate();
      }


      if( ($row['C17'] !=null) && ($row['D17'] == null) && ($row[ 'E17'] == null) && ($row['F17'] == null) && ($row['G17'] != null) && ($row['H17'] != null))
      {
        Validator::make($row, [
        'D17' => 'required',
        'E17' => 'required',
        'F17' => 'required',
        ],$messages)->validate();
       }

      if( ($row['C17'] !=null) && ($row['D17'] == null) && ($row[ 'E17'] == null) && ($row['F17'] != null) && ($row['G17'] != null) && ($row['H17'] != null))
      {
        Validator::make($row, [
        'D17' => 'required',
        'E17' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C17'] !=null) && ($row['D17'] == null) && ($row[ 'E17'] != null) && ($row['F17'] == null) && ($row['G17'] != null) && ($row['H17'] != null))
      {
        Validator::make($row, [
        'D17' => 'required',
        'F17' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C17'] !=null) && ($row['D17'] == null) && ($row[ 'E17'] != null) && ($row['F17'] != null) && ($row['G17'] != null) && ($row['H17'] != null))
       {
         Validator::make($row, [
         'D17' => 'required',
         ],$messages)->validate();
        }
 

       if( ($row['C17'] !=null) && ($row['D17'] == null) && ($row[ 'E17'] == null) && ($row['F17'] != null) && ($row['G17'] == null) && ($row['H17'] != null))
       {
         Validator::make($row, [
         'D17' => 'required',
         'F17' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C17'] ==null) && ($row['D17'] == null) && ($row[ 'E17'] == null) && ($row['F17'] != null) && ($row['G17'] == null) && ($row['H17'] != null))
        {
          Validator::make($row,[
          'C17' => 'required', 
          'D17' => 'required',
          'E17' => 'required',
          'G17' => 'required',
          ],$messages)->validate();
         }

        if( ($row['C17'] !=null) && ($row['D17'] == null) && ($row[ 'E17'] == null) && ($row['F17'] != null) && ($row['G17'] != null) && ($row['H17'] != null))
        {
          Validator::make($row,[
          'D17' => 'required',
          'F17' => 'required',
          ],$messages)->validate();
         }
 

       if( ($row['C17'] !=null) && ($row['D17'] != null) && ($row[ 'E17'] == null) && ($row['F17'] == null) && ($row['G17'] != null) && ($row['H17'] != null))
       {
         Validator::make($row, [
         'E17' => 'required',
         'F17' => 'required',
         ],$messages)->validate();
        }


      if( ($row['C17'] !=null) && ($row['D17'] == null) && ($row[ 'E17'] == null) && ($row['F17'] == null) && ($row['G17'] != null) && ($row['H17'] == null))
      {
        Validator::make($row,[
        'D17' => 'required',
        'E17' => 'required',
        'F17' => 'required',
        'H17' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C17'] !=null) && ($row['D17'] != null) && ($row[ 'E17'] == null) && ($row['F17'] == null) && ($row['G17'] != null) && ($row['H17'] == null))
       {
         Validator::make($row,[
         'E17' => 'required',
         'F17' => 'required',
         'H17' => 'required',
         ],$messages)->validate();
        }

      if( ($row['C17'] !=null) && ($row['D17'] == null) && ($row[ 'E17'] == null) && ($row['F17'] == null) && ($row['G17'] == null) && ($row['H17'] == null))
     {
       Validator::make($row, [
       'D17' => 'required',
       'E17' => 'required',
       'F17' => 'required',
       'G17' => 'required',
       'H17' => 'required',
       ],$messages)->validate();
      }

      if( ($row['C17'] ==null) && ($row['D17'] != null) && ($row[ 'E17'] == null) && ($row['F17'] == null) && ($row['G17'] == null) && ($row['H17'] != null))
      {
        Validator::make($row,[
        'C17' => 'required',
        'E17' => 'required',
        'F17' => 'required',
        'G17' => 'required',
        ],$messages)->validate();
       }


       if( ($row['C17'] ==null) && ($row['D17'] != null) && ($row[ 'E17'] == null) && ($row['F17'] == null) && ($row['G17'] != null) && ($row['H17'] != null))
       {
         Validator::make($row,[
         'C17' => 'required',
         'E17' => 'required',
         'F17' => 'required',
         ],$messages)->validate();
        }
    
      if( ($row['C17'] == null) && ($row['D17'] != null) && ($row[ 'E17'] == null) && ($row['F17'] == null) && ($row['G17'] == null) && ($row['H17'] == null))
      {
        Validator::make($row,[
        'C17' => 'required',
        'E17' => 'required',
        'F17' => 'required',
        'G17' => 'required',
        'H17' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C17'] == null) && ($row['D17'] == null) && ($row[ 'E17'] != null) && ($row['F17'] == null) && ($row['G17'] == null) && ($row['H17'] == null))
      {
        Validator::make($row,[
        'C17' => 'required',
        'D17' => 'required',
        'F17' => 'required',
        'G17' => 'required',
        'H17' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C17'] == null) && ($row['D17'] == null) && ($row[ 'E17'] == null) && ($row['F17'] != null) && ($row['G17'] == null) && ($row['H17'] == null))
       {
         Validator::make($row, [
         'C17' => 'required',
         'D17' => 'required',
         'E17' => 'required',
         'G17' => 'required',
         'H17' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C17'] == null) && ($row['D17'] == null) && ($row[ 'E17'] == null) && ($row['F17'] == null) && ($row['G17'] != null) && ($row['H17'] == null))
        {
          Validator::make($row, [
          'C17' => 'required',
          'D17' => 'required',
          'E17' => 'required',
          'F17' => 'required',
          'H17' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C17'] == null) && ($row['D17'] != null) && ($row[ 'E17'] == null) && ($row['F17'] == null) && ($row['G17'] != null) && ($row['H17'] == null))
         {
           Validator::make($row, [
           'C17' => 'required',
           'E17' => 'required',
           'F17' => 'required',
           'H17' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C17'] == null) && ($row['D17'] != null) && ($row[ 'E17'] == null) && ($row['F17'] == null) && ($row['G17'] != null) && ($row['H17'] == null))
         {
           Validator::make($row,[
           'C17' => 'required',
           'E17' => 'required',
           'F17' => 'required',
           'H17' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C17'] == null) && ($row['D17'] != null) && ($row[ 'E17'] == null) && ($row['F17'] != null) && ($row['G17'] != null) && ($row['H17'] == null))
          {
            Validator::make($row,[
            'C17' => 'required',
            'E17' => 'required',
            'H17' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C17'] == null) && ($row['D17'] != null) && ($row[ 'E17'] == null) && ($row['F17'] != null) && ($row['G17'] == null) && ($row['H17'] == null))
          {
            Validator::make($row,[
            'C17' => 'required',
            'E17' => 'required',
            'G17' => 'required',
            'H17' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C17'] == null) && ($row['D17'] != null) && ($row[ 'E17'] == null) && ($row['F17'] != null) && ($row['G17'] == null) && ($row['H17'] != null))
           {
             Validator::make($row, [
             'C17' => 'required',
             'E17' => 'required',
             'G17' => 'required',
             ],$messages)->validate();
            }

         if( ($row['C17'] != null) && ($row['D17'] == null) && ($row[ 'E17'] == null) && ($row['F17'] == null) && ($row['G17'] != null) && ($row['H17'] == null))
        {
          Validator::make($row,[
          'D17' => 'required',
          'E17' => 'required',
          'F17' => 'required',
          'H17' => 'required',
          ],$messages)->validate();
         }
         
         if( ($row['C17'] != null) && ($row['D17'] != null) && ($row[ 'E17'] == null) && ($row['F17'] != null) && ($row['G17'] == null) && ($row['H17'] != null))
         {
           Validator::make($row, [
           'E17' => 'required',
           'G17' => 'required',
           ],$messages)->validate();
          }

         if( ($row['C17'] != null) && ($row['D17'] != null) && ($row[ 'E17'] == null) && ($row['F17'] == null) && ($row['G17'] != null) && ($row['H17'] == null))
         {
           Validator::make($row, [
           'E17' => 'required',
           'F17' => 'required',
           'H17' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C17'] != null) && ($row['D17'] == null) && ($row[ 'E17'] == null) && ($row['F17'] != null) && ($row['G17'] == null) && ($row['H17'] == null))
          {
            Validator::make($row,[
              'D17' => 'required',
              'E17' => 'required',
              'G17' => 'required',
              'H17' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C17'] != null) && ($row['D17'] != null) && ($row[ 'E17'] == null) && ($row['F17'] != null) && ($row['G17'] == null) && ($row['H17'] == null))
           {
             Validator::make($row, [
               'E17' => 'required',
               'G17' => 'required',
               'H17' => 'required',
             ],$messages)->validate();
            }

          
          
          

         if( ($row['C17'] == null) && ($row['D17'] == null) && ($row[ 'E17'] == null) && ($row['F17'] == null) && ($row['G17'] == null) && ($row['H17'] != null))
         {
           Validator::make($row,[
           'C17' => 'required',
           'D17' => 'required',
           'E17' => 'required',
           'F17' => 'required',
           'G17' => 'required',
           ],$messages)->validate();
          }


          if( ($row['C17'] != null) && ($row['D17'] == null) && ($row[ 'E17'] == null) && ($row['F17'] == null) && ($row['G17'] == null) && ($row['H17'] == null))
          {
            Validator::make($row,[
            'D17' => 'required',
            'E17' => 'required',
            'F17' => 'required',
            'G17' => 'required',
            'H17' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C17'] != null) && ($row['D17'] == null) && ($row[ 'E17'] == null) && ($row['F17'] == null) && ($row['G17'] == null) && ($row['H17'] != null))
           {
             Validator::make($row,[
             'D17' => 'required',
             'E17' => 'required',
             'F17' => 'required',
             'G17' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C17'] != null) && ($row['D17'] != null) && ($row[ 'E17'] == null) && ($row['F17'] == null) && ($row['G17'] == null) && ($row['H17'] != null))
            {
              Validator::make($row, [
              'E17' => 'required',
              'F17' => 'required',
              'G17' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C17'] != null) && ($row['D17'] != null) && ($row[ 'E17'] != null) && ($row['F17'] == null) && ($row['G17'] == null) && ($row['H17'] != null))
            {
              Validator::make($row, [
              'F17' => 'required',
              'G17' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C17'] != null) && ($row['D17'] != null) && ($row[ 'E17'] != null) && ($row['F17'] != null) && ($row['G17'] == null) && ($row['H17'] != null))
             {
               Validator::make($row,[
               'G17' => 'required',
               ],$messages)->validate();
              }

            

           if( ($row['C17'] != null) && ($row['D17'] != null) && ($row[ 'E17'] == null) && ($row['F17'] == null) && ($row['G17'] == null) && ($row['H17'] == null))
          {
            Validator::make($row,[
            'E17' => 'required',
            'F17' => 'required',
            'G17' => 'required',
            'H17' => 'required',
            ],$messages)->validate();
           }

           
           if( ($row['C17'] == null) && ($row['D17'] != null) && ($row[ 'E17'] == null) && ($row['F17'] == null) && ($row['G17'] == null) && ($row['H17'] != null))
          {
            Validator::make($row, [
            'C17' => 'required', 
            'E17' => 'required',
            'F17' => 'required',
            'G17' => 'required',
            ],$messages)->validate();
           }

           
          


           if( ($row['C17'] == null) && ($row['D17'] == null) && ($row[ 'E17'] == null) && ($row['F17'] != null) && ($row['G17'] == null) && ($row['H17'] == null))
           {
             Validator::make($row,[
             'C17' => 'required', 
             'D17' => 'required',
             'E17' => 'required',
             'G17' => 'required',
             'H17' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C17'] == null) && ($row['D17'] == null) && ($row[ 'E17'] != null) && ($row['F17'] == null) && ($row['G17'] == null) && ($row['H17'] == null))
            {
              Validator::make($row, [
              'C17' => 'required', 
              'D17' => 'required',
              'F17' => 'required',
              'G17' => 'required',
              'H17' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C17'] == null) && ($row['D17'] == null) && ($row[ 'E17'] != null) && ($row['F17'] == null) && ($row['G17'] != null) && ($row['H17'] == null))
             {
               Validator::make($row,[
               'C17' => 'required', 
               'D17' => 'required',
               'F17' => 'required',
               'H17' => 'required',
               ],$messages)->validate();
              }

              if( ($row['C17'] == null) && ($row['D17'] != null) && ($row[ 'E17'] != null) && ($row['F17'] == null) && ($row['G17'] == null) && ($row['H17'] == null))
             {
               Validator::make($row,[
               'C17' => 'required', 
               'F17' => 'required',
               'G17' => 'required',
               'H17' => 'required',
               ],$messages)->validate();
              }

             if( ($row['C17'] == null) && ($row['D17'] != null) && ($row[ 'E17'] == null) && ($row['F17'] != null) && ($row['G17'] == null) && ($row['H17'] == null))
            {
              Validator::make($row, [
              'C17' => 'required', 
              'G17' => 'required',
              'H17' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C17'] == null) && ($row['D17'] == null) && ($row[ 'E17'] != null) && ($row['F17'] == null) && ($row['G17'] == null) && ($row['H17'] != null))
             {
               Validator::make($row,[
               'C17' => 'required', 
               'D17' => 'required',
               'F17' => 'required',
               'G17' => 'required',
               ],$messages)->validate();
              }
 
             if( ($row['C17'] == null) && ($row['D17'] != null) && ($row[ 'E17'] == null) && ($row['F17'] == null) && ($row['G17'] == null) && ($row['H17'] == null))
            {
              Validator::make($row,[
              'C17' => 'required', 
              'E17' => 'required',
              'F17' => 'required',
              'G17' => 'required',
              'H17' => 'required',
              ],$messages)->validate();
             }

           if( ($row['C17'] != null) && ($row['D17'] != null) && ($row[ 'E17'] != null) && ($row['F17'] == null) && ($row['G17'] == null) && ($row['H17'] == null))
           {
             Validator::make($row, [
             'F17' => 'required',
             'G17' => 'required',
             'H17' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C17'] != null) && ($row['D17'] != null) && ($row[ 'E17'] != null) && ($row['F17'] != null) && ($row['G17'] == null) && ($row['H17'] == null))
           {
             Validator::make($row,[
             'G17' => 'required',
             'H17' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C17'] != null) && ($row['D17'] != null) && ($row[ 'E17'] != null) && ($row['F17'] != null) && ($row['G17'] != null) && ($row['H17'] == null))
            {
              Validator::make($row, [
              'H17' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C17'] == null) && ($row['D17'] == null) && ($row[ 'E17'] == null) && ($row['F17'] == null) && ($row['G17'] != null) && ($row['H17'] == null))
            {
              Validator::make($row,[
              'C17' => 'required',
              'D17' => 'required',
              'E17' => 'required',
              'F17' => 'required',
              'H17' => 'required',
              ],$messages)->validate();
             }

          if( ($row['C17'] == null) && ($row['D17'] == null) && ($row[ 'E17'] == null) && ($row['F17'] == null) && ($row['G17'] == null) && ($row['H17'] != null))
         {
           Validator::make($row, [
           'C17' => 'required',
           'D17' => 'required',
           'E17' => 'required',
           'F17' => 'required',
           'G17' => 'required',
           ],$messages)->validate();
          }
         if( ($row['C17'] == null) && ($row['D17'] == null) && ($row[ 'E17'] == null) && ($row['F17'] == null) && ($row['G17'] != null) && ($row['H17'] != null))
        {
          Validator::make($row, [
          'C17' => 'required',
          'D17' => 'required',
          'E17' => 'required',
          'F17' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C17'] == null) && ($row['D17'] == null) && ($row[ 'E17'] == null) && ($row['F17'] == null) && ($row['G17'] != null) && ($row['H17'] != null))
         {
           Validator::make($row,[
           'C17' => 'required',
           'D17' => 'required',
           'E17' => 'required',
           'F17' => 'required',
           ],$messages)->validate();
          }
 

        if( ($row['C17'] == null) && ($row['D17'] == null) && ($row[ 'E17'] == null) && ($row['F17'] != null) && ($row['G17'] != null) && ($row['H17'] == null))
        {
          Validator::make($row, [
          'C17' => 'required',
          'D17' => 'required',
          'E17' => 'required',
          'H17' => 'required',
          ],$messages)->validate();
         }


         if( ($row['C17'] == null) && ($row['D17'] == null) && ($row[ 'E17'] == null) && ($row['F17'] != null) && ($row['G17'] != null) && ($row['H17'] != null))
        {
          Validator::make($row, [
          'C17' => 'required',
          'D17' => 'required',
          'E17' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C17'] == null) && ($row['D17'] == null) && ($row[ 'E17'] == null) && ($row['F17'] != null) && ($row['G17'] != null) && ($row['H17'] != null))
         {
           Validator::make($row, [
           'C17' => 'required',
           'D17' => 'required',
           'E17' => 'required',
           ],$messages)->validate();
          }

       if( ($row['C17'] == null) && ($row['D17'] == null) && ($row[ 'E17'] != null) && ($row['F17'] != null) && ($row['G17'] == null) && ($row['H17'] == null))
       {
         Validator::make($row, [
         'C17' => 'required',
         'G17' => 'required',
         'H17' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C17'] == null) && ($row['D17'] == null) && ($row[ 'E17'] != null) && ($row['F17'] != null) && ($row['G17'] != null) && ($row['H17'] == null))
       {
         Validator::make($row,[
         'C17' => 'required',
         'D17' => 'required',
         'H17' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C17'] == null) && ($row['D17'] == null) && ($row[ 'E17'] != null) && ($row['F17'] != null) && ($row['G17'] != null) && ($row['H17'] != null))
        {
          Validator::make($row, [
          'C17' => 'required',
          'D17' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C17'] == null) && ($row['D17'] == null) && ($row[ 'E17'] != null) && ($row['F17'] != null) && ($row['G17'] != null) && ($row['H17'] != null))
        {
          Validator::make($row,[
          'C17' => 'required',
          'D17' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C17'] == null) && ($row['D17'] == null) && ($row[ 'E17'] != null) && ($row['F17'] != null) && ($row['G17'] != null) && ($row['H17'] != null))
        {
          Validator::make($row, [
          'C17' => 'required',
          'D17' => 'required',
          ],$messages)->validate();
         }

       if( ($row['C17'] == null) && ($row['D17'] != null) && ($row[ 'E17'] != null) && ($row['F17'] == null) && ($row['G17'] == null) && ($row['H17'] == null))
       {
         Validator::make($row,[
         'C17' => 'required',
         'F17' => 'required',
         'G17' => 'required',
         'H17' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C17'] == null) && ($row['D17'] != null) && ($row[ 'E17'] != null) && ($row['F17'] != null) && ($row['G17'] == null) && ($row['H17'] == null))
       {
         Validator::make($row, [
         'C17' => 'required',
         'G17' => 'required',
         'H17' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C17'] == null) && ($row['D17'] != null) && ($row[ 'E17'] != null) && ($row['F17'] != null) && ($row['G17'] != null) && ($row['H17'] == null))
        {
          Validator::make($row,[
          'C17' => 'required',
          'H17' => 'required',
          ],$messages)->validate();
         }

        
          if( ($row['C17'] == null) && ($row['D17'] != null) && ($row[ 'E17'] != null) && ($row['F17'] != null) && ($row['G17'] != null) && ($row['H17'] != null))
          {
            Validator::make($row,[
            'C17' => 'required',
            ],$messages)->validate();
           }
      
            if( ($row['C17']!=null) && ($row['D17'] != null) && ($row[ 'E17'] == null) && ($row['F17'] == null) && ($row['G17'] == null) && ($row['H17'] == null))
            {
              Validator::make($row, [
               'E17' => 'required',
                'F17' => 'required',
               'G17' => 'required',
               'H17' => 'required',
              ],$messages)->validate();
              }
        
              if( ($row['C17']!=null) && ($row['D17'] != null) && ($row[ 'E17'] != null) && ($row['F17'] == null) && ($row['G17'] == null) && ($row['H17'] == null))
              {
                Validator::make($row,[
                  'F17' => 'required',
                 'G17' => 'required',
                 'H17' => 'required',
                ],$messages)->validate();
                }

                if( ($row['C17']==null) && ($row['D17'] == null) && ($row[ 'E17'] == null) && ($row['F17'] != null) && ($row['G17'] == null) && ($row['H17'] == null))
              {
                Validator::make($row, [
                  'C17' => 'required',
                 'D17' => 'required',
                 'E17' => 'required',
                  'G17' => 'required',
                  'H17' => 'required',
                ],$messages)->validate();
                }
                if( ($row['C17']!=null) && ($row['D17'] != null) && ($row[ 'E17'] == null) && ($row['F17'] != null) && ($row['G17'] != null) && ($row['H17'] != null))
                {
                  Validator::make($row, [
                   'E17' => 'required',
                  ],$messages)->validate();
                  }

                  if( ($row['C17']!=null) && ($row['D17'] != null) && ($row[ 'E17'] != null) && ($row['F17'] != null) && ($row['G17'] == null) && ($row['H17'] != null))
                {
                  Validator::make($row, [
                   'G17' => 'required',
                  ],$messages)->validate();
                  }

                  
                  if( ($row['C17']!=null) && ($row['D17'] != null) && ($row[ 'E17'] != null) && ($row['F17'] == null) && ($row['G17'] != null) && ($row['H17'] != null))
                {
                  Validator::make($row, [
                   'F17' => 'required',
                  ],$messages)->validate();
                  }



                if( ($row['C17']!=null) && ($row['D17'] != null) && ($row[ 'E17'] != null) && ($row['F17'] != null) && ($row['G17'] == null) && ($row['H17'] == null))
              {
                Validator::make($row,[
                 'G17' => 'required',
                 'H17' => 'required',
                ],$messages)->validate();
                }

                if( ($row['C17']!=null) && ($row['D17'] != null) && ($row[ 'E17'] != null) && ($row['F17'] != null) && ($row['G17'] != null) && ($row['H17'] == null))
                {
                  Validator::make($row, [
                   'H17' => 'required',
                  ],$messages)->validate();
                  }

                 
                  //$d2 = $row['C17'];
                  //dd($d2);
                    //$d2 = (DateTime::createFromFormat('d-m-Y ', $row['C17'])->format('Y-m-d'))? "" : null;
                   // dd(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['C14'])? "" : null);

                    if($row['C17'] != null){
           return new PartWorkedOn([
              'job_date'  => DateTime::createFromFormat('d-m-Y', $row['C17'])->format('Y-m-d'),
              'repair_code' => $row['D17'],
              'description' =>  $row[ 'E17'],
              'part_no'  => $row['F17'],
              'quantity'  => $row['G17'],
              'unit_price' => $row['H17'],
              'job_cards' => $row[ 'J7'],
              'cost' => $row['P25'] * 1200,
              'outside_cost' => $row['M14'] + 0,
            ]);
           
           }
    }

 
}