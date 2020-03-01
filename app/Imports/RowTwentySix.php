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
class RowTwentySix implements WithMappedCells,ToModel
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
             'C26' => 'C26',
             'D26' => 'D26',
             'E26' => 'E26',
             'F26' => 'F26',
             'G26' => 'G26',
             'H26' => 'H26',
             'J7'  => 'J7',
             'M14' => 'M14',
             
             
      ];
    }

    
    public function model(array $row)
    {
      $messages = [
        'C26.required' => 'We need to know the Date the repair was perfomed in row 26!',
        'D26.required' => 'We need to know the repair code in row 26!',
        'E26.required' => 'We need to know the Description of the Part worked on in row 26!',
        'F26.required' => 'We need to know the Part or Serial Number in row 26!',
        'G26.required' => 'We need to know the Quantity in row 26 !',
        'H26.required' => 'We need to know the Unit Price in row 26!',
    ];

     if( ($row['C26'] !=null) && ($row['D26'] == null) && ($row[ 'E26'] != null) && ($row['F26'] == null) && ($row['G26'] != null) && ($row['H26'] == null))
     {
       Validator::make($row, [
       'D26' => 'required',
       'F26' => 'required',
       'H26' => 'required',
       ],$messages)->validate();
      }

      if( ($row['C26'] !=null) && ($row['D26'] == null) && ($row[ 'E26'] != null) && ($row['F26'] == null) && ($row['G26'] != null) && ($row['H26'] != null))
      {
        Validator::make($row, [
        'D26' => 'required',
        'F26' => 'required',
        ],$messages)->validate();
       }

      if( ($row['C26'] !=null) && ($row['D26'] == null) && ($row[ 'E26'] == null) && ($row['F26'] == null) && ($row['G26'] != null) && ($row['H26'] != null))
     {
       Validator::make($row, [
       'D26' => 'required',
       'E26' => 'required',
       'F26' => 'required',
       ],$messages)->validate();
      }


      if( ($row['C26'] !=null) && ($row['D26'] == null) && ($row[ 'E26'] == null) && ($row['F26'] == null) && ($row['G26'] != null) && ($row['H26'] != null))
      {
        Validator::make($row, [
        'D26' => 'required',
        'E26' => 'required',
        'F26' => 'required',
        ],$messages)->validate();
       }

      if( ($row['C26'] !=null) && ($row['D26'] == null) && ($row[ 'E26'] == null) && ($row['F26'] != null) && ($row['G26'] != null) && ($row['H26'] != null))
      {
        Validator::make($row, [
        'D26' => 'required',
        'E26' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C26'] !=null) && ($row['D26'] == null) && ($row[ 'E26'] != null) && ($row['F26'] == null) && ($row['G26'] != null) && ($row['H26'] != null))
      {
        Validator::make($row, [
        'D26' => 'required',
        'F26' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C26'] !=null) && ($row['D26'] == null) && ($row[ 'E26'] != null) && ($row['F26'] != null) && ($row['G26'] != null) && ($row['H26'] != null))
       {
         Validator::make($row, [
         'D26' => 'required',
         ],$messages)->validate();
        }
 

       if( ($row['C26'] !=null) && ($row['D26'] == null) && ($row[ 'E26'] == null) && ($row['F26'] != null) && ($row['G26'] == null) && ($row['H26'] != null))
       {
         Validator::make($row, [
         'D26' => 'required',
         'F26' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C26'] ==null) && ($row['D26'] == null) && ($row[ 'E26'] == null) && ($row['F26'] != null) && ($row['G26'] == null) && ($row['H26'] != null))
        {
          Validator::make($row,[
          'C26' => 'required', 
          'D26' => 'required',
          'E26' => 'required',
          'G26' => 'required',
          ],$messages)->validate();
         }

        if( ($row['C26'] !=null) && ($row['D26'] == null) && ($row[ 'E26'] == null) && ($row['F26'] != null) && ($row['G26'] != null) && ($row['H26'] != null))
        {
          Validator::make($row,[
          'D26' => 'required',
          'F26' => 'required',
          ],$messages)->validate();
         }
 

       if( ($row['C26'] !=null) && ($row['D26'] != null) && ($row[ 'E26'] == null) && ($row['F26'] == null) && ($row['G26'] != null) && ($row['H26'] != null))
       {
         Validator::make($row, [
         'E26' => 'required',
         'F26' => 'required',
         ],$messages)->validate();
        }


      if( ($row['C26'] !=null) && ($row['D26'] == null) && ($row[ 'E26'] == null) && ($row['F26'] == null) && ($row['G26'] != null) && ($row['H26'] == null))
      {
        Validator::make($row,[
        'D26' => 'required',
        'E26' => 'required',
        'F26' => 'required',
        'H26' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C26'] !=null) && ($row['D26'] != null) && ($row[ 'E26'] == null) && ($row['F26'] == null) && ($row['G26'] != null) && ($row['H26'] == null))
       {
         Validator::make($row,[
         'E26' => 'required',
         'F26' => 'required',
         'H26' => 'required',
         ],$messages)->validate();
        }

      if( ($row['C26'] !=null) && ($row['D26'] == null) && ($row[ 'E26'] == null) && ($row['F26'] == null) && ($row['G26'] == null) && ($row['H26'] == null))
     {
       Validator::make($row, [
       'D26' => 'required',
       'E26' => 'required',
       'F26' => 'required',
       'G26' => 'required',
       'H26' => 'required',
       ],$messages)->validate();
      }

      if( ($row['C26'] ==null) && ($row['D26'] != null) && ($row[ 'E26'] == null) && ($row['F26'] == null) && ($row['G26'] == null) && ($row['H26'] != null))
      {
        Validator::make($row,[
        'C26' => 'required',
        'E26' => 'required',
        'F26' => 'required',
        'G26' => 'required',
        ],$messages)->validate();
       }


       if( ($row['C26'] ==null) && ($row['D26'] != null) && ($row[ 'E26'] == null) && ($row['F26'] == null) && ($row['G26'] != null) && ($row['H26'] != null))
       {
         Validator::make($row,[
         'C26' => 'required',
         'E26' => 'required',
         'F26' => 'required',
         ],$messages)->validate();
        }
    
      if( ($row['C26'] == null) && ($row['D26'] != null) && ($row[ 'E26'] == null) && ($row['F26'] == null) && ($row['G26'] == null) && ($row['H26'] == null) )
      {
        Validator::make($row,[
        'C26' => 'required',
        'E26' => 'required',
        'F26' => 'required',
        'G26' => 'required',
        'H26' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C26'] == null) && ($row['D26'] == null) && ($row[ 'E26'] != null) && ($row['F26'] == null) && ($row['G26'] == null) && ($row['H26'] == null))
      {
        Validator::make($row,[
        'C26' => 'required',
        'D26' => 'required',
        'F26' => 'required',
        'G26' => 'required',
        'H26' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C26'] == null) && ($row['D26'] == null) && ($row[ 'E26'] == null) && ($row['F26'] != null) && ($row['G26'] == null) && ($row['H26'] == null))
       {
         Validator::make($row, [
         'C26' => 'required',
         'D26' => 'required',
         'E26' => 'required',
         'G26' => 'required',
         'H26' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C26'] == null) && ($row['D26'] == null) && ($row[ 'E26'] == null) && ($row['F26'] == null) && ($row['G26'] != null) && ($row['H26'] == null))
        {
          Validator::make($row, [
          'C26' => 'required',
          'D26' => 'required',
          'E26' => 'required',
          'F26' => 'required',
          'H26' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C26'] == null) && ($row['D26'] != null) && ($row[ 'E26'] == null) && ($row['F26'] == null) && ($row['G26'] != null) && ($row['H26'] == null))
         {
           Validator::make($row, [
           'C26' => 'required',
           'E26' => 'required',
           'F26' => 'required',
           'H26' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C26'] == null) && ($row['D26'] != null) && ($row[ 'E26'] == null) && ($row['F26'] == null) && ($row['G26'] != null) && ($row['H26'] == null))
         {
           Validator::make($row,[
           'C26' => 'required',
           'E26' => 'required',
           'F26' => 'required',
           'H26' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C26'] == null) && ($row['D26'] != null) && ($row[ 'E26'] == null) && ($row['F26'] != null) && ($row['G26'] != null) && ($row['H26'] == null))
          {
            Validator::make($row,[
            'C26' => 'required',
            'E26' => 'required',
            'H26' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C26'] == null) && ($row['D26'] != null) && ($row[ 'E26'] == null) && ($row['F26'] != null) && ($row['G26'] == null) && ($row['H26'] == null))
          {
            Validator::make($row,[
            'C26' => 'required',
            'E26' => 'required',
            'G26' => 'required',
            'H26' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C26'] == null) && ($row['D26'] != null) && ($row[ 'E26'] == null) && ($row['F26'] != null) && ($row['G26'] == null) && ($row['H26'] != null))
           {
             Validator::make($row, [
             'C26' => 'required',
             'E26' => 'required',
             'G26' => 'required',
             ],$messages)->validate();
            }

         if( ($row['C26'] != null) && ($row['D26'] == null) && ($row[ 'E26'] == null) && ($row['F26'] == null) && ($row['G26'] != null) && ($row['H26'] == null))
        {
          Validator::make($row,[
          'D26' => 'required',
          'E26' => 'required',
          'F26' => 'required',
          'H26' => 'required',
          ],$messages)->validate();
         }
         
         if( ($row['C26'] != null) && ($row['D26'] != null) && ($row[ 'E26'] == null) && ($row['F26'] != null) && ($row['G26'] == null) && ($row['H26'] != null))
         {
           Validator::make($row, [
           'E26' => 'required',
           'G26' => 'required',
           ],$messages)->validate();
          }

         if( ($row['C26'] != null) && ($row['D26'] != null) && ($row[ 'E26'] == null) && ($row['F26'] == null) && ($row['G26'] != null) && ($row['H26'] == null))
         {
           Validator::make($row, [
           'E26' => 'required',
           'F26' => 'required',
           'H26' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C26'] != null) && ($row['D26'] == null) && ($row[ 'E26'] == null) && ($row['F26'] != null) && ($row['G26'] == null) && ($row['H26'] == null))
          {
            Validator::make($row,[
              'D26' => 'required',
              'E26' => 'required',
              'G26' => 'required',
              'H26' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C26'] != null) && ($row['D26'] != null) && ($row[ 'E26'] == null) && ($row['F26'] != null) && ($row['G26'] == null) && ($row['H26'] == null))
           {
             Validator::make($row, [
               'E26' => 'required',
               'G26' => 'required',
               'H26' => 'required',
             ],$messages)->validate();
            }

          
          
          

         if( ($row['C26'] == null) && ($row['D26'] == null) && ($row[ 'E26'] == null) && ($row['F26'] == null) && ($row['G26'] == null) && ($row['H26'] != null))
         {
           Validator::make($row,[
           'C26' => 'required',
           'D26' => 'required',
           'E26' => 'required',
           'F26' => 'required',
           'G26' => 'required',
           ],$messages)->validate();
          }

          

          if( ($row['C26'] != null) && ($row['D26'] == null) && ($row[ 'E26'] == null) && ($row['F26'] == null) && ($row['G26'] == null) && ($row['H26'] == null))
          {
            Validator::make($row,[
            'D26' => 'required',
            'E26' => 'required',
            'F26' => 'required',
            'G26' => 'required',
            'H26' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C26'] != null) && ($row['D26'] == null) && ($row[ 'E26'] == null) && ($row['F26'] == null) && ($row['G26'] == null) && ($row['H26'] != null))
           {
             Validator::make($row,[
             'D26' => 'required',
             'E26' => 'required',
             'F26' => 'required',
             'G26' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C26'] != null) && ($row['D26'] != null) && ($row[ 'E26'] == null) && ($row['F26'] == null) && ($row['G26'] == null) && ($row['H26'] != null))
            {
              Validator::make($row, [
              'E26' => 'required',
              'F26' => 'required',
              'G26' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C26'] != null) && ($row['D26'] != null) && ($row[ 'E26'] != null) && ($row['F26'] == null) && ($row['G26'] == null) && ($row['H26'] != null))
            {
              Validator::make($row, [
              'F26' => 'required',
              'G26' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C26'] != null) && ($row['D26'] != null) && ($row[ 'E26'] != null) && ($row['F26'] != null) && ($row['G26'] == null) && ($row['H26'] != null) )
             {
               Validator::make($row,[
               'G26' => 'required',
               ],$messages)->validate();
              }

            

           if( ($row['C26'] != null) && ($row['D26'] != null) && ($row[ 'E26'] == null) && ($row['F26'] == null) && ($row['G26'] == null) && ($row['H26'] == null))
          {
            Validator::make($row,[
            'E26' => 'required',
            'F26' => 'required',
            'G26' => 'required',
            'H26' => 'required',
            ],$messages)->validate();
           }

           
           if( ($row['C26'] == null) && ($row['D26'] != null) && ($row[ 'E26'] == null) && ($row['F26'] == null) && ($row['G26'] == null) && ($row['H26'] != null))
          {
            Validator::make($row, [
            'C26' => 'required', 
            'E26' => 'required',
            'F26' => 'required',
            'G26' => 'required',
            ],$messages)->validate();
           }

           
          


           if( ($row['C26'] == null) && ($row['D26'] == null) && ($row[ 'E26'] == null) && ($row['F26'] != null) && ($row['G26'] == null) && ($row['H26'] == null) )
           {
             Validator::make($row,[
             'C26' => 'required', 
             'D26' => 'required',
             'E26' => 'required',
             'G26' => 'required',
             'H26' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C26'] == null) && ($row['D26'] == null) && ($row[ 'E26'] != null) && ($row['F26'] == null) && ($row['G26'] == null) && ($row['H26'] == null) )
            {
              Validator::make($row, [
              'C26' => 'required', 
              'D26' => 'required',
              'F26' => 'required',
              'G26' => 'required',
              'H26' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C26'] == null) && ($row['D26'] == null) && ($row[ 'E26'] != null) && ($row['F26'] == null) && ($row['G26'] != null) && ($row['H26'] == null) )
             {
               Validator::make($row,[
               'C26' => 'required', 
               'D26' => 'required',
               'F26' => 'required',
               'H26' => 'required',
               ],$messages)->validate();
              }

              if( ($row['C26'] == null) && ($row['D26'] != null) && ($row[ 'E26'] != null) && ($row['F26'] == null) && ($row['G26'] == null) && ($row['H26'] == null))
             {
               Validator::make($row,[
               'C26' => 'required', 
               'F26' => 'required',
               'G26' => 'required',
               'H26' => 'required',
               ],$messages)->validate();
              }

             if( ($row['C26'] == null) && ($row['D26'] != null) && ($row[ 'E26'] == null) && ($row['F26'] != null) && ($row['G26'] == null) && ($row['H26'] == null))
            {
              Validator::make($row, [
              'C26' => 'required', 
              'G26' => 'required',
              'H26' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C26'] == null) && ($row['D26'] == null) && ($row[ 'E26'] != null) && ($row['F25'] == null) && ($row['G26'] == null) && ($row['H26'] != null))
             {
               Validator::make($row,[
               'C26' => 'required', 
               'D26' => 'required',
               'F26' => 'required',
               'G26' => 'required',
               ],$messages)->validate();
              }
 
             if( ($row['C26'] == null) && ($row['D26'] != null) && ($row[ 'E26'] == null) && ($row['F26'] == null) && ($row['G26'] == null) && ($row['H26'] == null))
            {
              Validator::make($row,[
              'C26' => 'required', 
              'E26' => 'required',
              'F26' => 'required',
              'G26' => 'required',
              'H26' => 'required',
              ],$messages)->validate();
             }

           if( ($row['C26'] != null) && ($row['D26'] != null) && ($row[ 'E26'] != null) && ($row['F26'] == null) && ($row['G26'] == null) && ($row['H26'] == null))
           {
             Validator::make($row, [
             'F26' => 'required',
             'G26' => 'required',
             'H26' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C26'] != null) && ($row['D26'] != null) && ($row[ 'E26'] != null) && ($row['F26'] != null) && ($row['G26'] == null) && ($row['H26'] == null))
           {
             Validator::make($row,[
             'G26' => 'required',
             'H26' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C26'] != null) && ($row['D26'] != null) && ($row[ 'E26'] != null) && ($row['F26'] != null) && ($row['G26'] != null) && ($row['H26'] == null))
            {
              Validator::make($row, [
              'H26' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C26'] == null) && ($row['D26'] == null) && ($row[ 'E26'] == null) && ($row['F26'] == null) && ($row['G26'] != null) && ($row['H26'] == null))
            {
              Validator::make($row,[
              'C26' => 'required',
              'D26' => 'required',
              'E26' => 'required',
              'F26' => 'required',
              'H26' => 'required',
              ],$messages)->validate();
             }

          if( ($row['C26'] == null) && ($row['D26'] == null) && ($row[ 'E26'] == null) && ($row['F26'] == null) && ($row['G26'] == null) && ($row['H26'] != null))
         {
           Validator::make($row, [
           'C26' => 'required',
           'D26' => 'required',
           'E26' => 'required',
           'F26' => 'required',
           'G26' => 'required',
           ],$messages)->validate();
          }
         if( ($row['C26'] == null) && ($row['D26'] == null) && ($row[ 'E26'] == null) && ($row['F26'] == null) && ($row['G26'] != null) && ($row['H26'] != null))
        {
          Validator::make($row, [
          'C26' => 'required',
          'D26' => 'required',
          'E26' => 'required',
          'F26' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C26'] == null) && ($row['D26'] == null) && ($row[ 'E26'] == null) && ($row['F26'] == null) && ($row['G26'] != null) && ($row['H26'] != null))
         {
           Validator::make($row,[
           'C26' => 'required',
           'D26' => 'required',
           'E26' => 'required',
           'F26' => 'required',
           ],$messages)->validate();
          }
 

        if( ($row['C26'] == null) && ($row['D26'] == null) && ($row[ 'E26'] == null) && ($row['F26'] != null) && ($row['G26'] != null) && ($row['H26'] == null))
        {
          Validator::make($row, [
          'C26' => 'required',
          'D26' => 'required',
          'E26' => 'required',
          'H26' => 'required',
          ],$messages)->validate();
         }


         if( ($row['C26'] == null) && ($row['D26'] == null) && ($row[ 'E26'] == null) && ($row['F26'] != null) && ($row['G26'] != null) && ($row['H26'] != null))
        {
          Validator::make($row, [
          'C26' => 'required',
          'D26' => 'required',
          'E26' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C26'] == null) && ($row['D26'] == null) && ($row[ 'E26'] == null) && ($row['F26'] != null) && ($row['G26'] != null) && ($row['H26'] != null))
         {
           Validator::make($row, [
           'C26' => 'required',
           'D26' => 'required',
           'E26' => 'required',
           ],$messages)->validate();
          }

       if( ($row['C26'] == null) && ($row['D26'] == null) && ($row[ 'E26'] != null) && ($row['F26'] != null) && ($row['G26'] == null) && ($row['H26'] == null))
       {
         Validator::make($row, [
         'C26' => 'required',
         'G26' => 'required',
         'H26' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C26'] == null) && ($row['D26'] == null) && ($row[ 'E26'] != null) && ($row['F26'] != null) && ($row['G26'] != null) && ($row['H26'] == null))
       {
         Validator::make($row,[
         'C26' => 'required',
         'D26' => 'required',
         'H26' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C26'] == null) && ($row['D26'] == null) && ($row[ 'E26'] != null) && ($row['F26'] != null) && ($row['G26'] != null) && ($row['H26'] != null))
        {
          Validator::make($row, [
          'C26' => 'required',
          'D26' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C26'] == null) && ($row['D26'] == null) && ($row[ 'E26'] != null) && ($row['F26'] != null) && ($row['G26'] != null) && ($row['H26'] != null))
        {
          Validator::make($row,[
          'C26' => 'required',
          'D26' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C26'] == null) && ($row['D26'] == null) && ($row[ 'E26'] != null) && ($row['F26'] != null) && ($row['G26'] != null) && ($row['H26'] != null))
        {
          Validator::make($row, [
          'C26' => 'required',
          'D26' => 'required',
          ],$messages)->validate();
         }

       if( ($row['C26'] == null) && ($row['D26'] != null) && ($row[ 'E26'] != null) && ($row['F26'] == null) && ($row['G26'] == null) && ($row['H26'] == null))
       {
         Validator::make($row,[
         'C26' => 'required',
         'F26' => 'required',
         'G26' => 'required',
         'H26' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C26'] == null) && ($row['D26'] != null) && ($row[ 'E26'] != null) && ($row['F26'] != null) && ($row['G26'] == null) && ($row['H26'] == null))
       {
         Validator::make($row, [
         'C26' => 'required',
         'G26' => 'required',
         'H26' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C26'] == null) && ($row['D26'] != null) && ($row[ 'E26'] != null) && ($row['F26'] != null) && ($row['G26'] != null) && ($row['H26'] == null))
        {
          Validator::make($row,[
          'C26' => 'required',
          'H26' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C26'] == null) && ($row['D26'] != null) && ($row[ 'E26'] != null) && ($row['F26'] != null) && ($row['G26'] != null) && ($row['H26'] != null))
         {
           Validator::make($row, [
           'C26' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C26'] == null) && ($row['D26'] != null) && ($row[ 'E26'] != null) && ($row['F26'] != null) && ($row['G26'] != null) && ($row['H26'] != null))
          {
            Validator::make($row,[
            'C26' => 'required',
            ],$messages)->validate();
           }
      
            if( ($row['C26']!=null) && ($row['D26'] != null) && ($row[ 'E26'] == null) && ($row['F26'] == null) && ($row['G26'] == null) && ($row['H26'] == null))
            {
              Validator::make($row, [
               'E26' => 'required',
                'F26' => 'required',
               'G26' => 'required',
               'H26' => 'required',
              ],$messages)->validate();
              }
        
              if( ($row['C26']!=null) && ($row['D26'] != null) && ($row[ 'E26'] != null) && ($row['F26'] == null) && ($row['G26'] == null) && ($row['H26'] == null))
              {
                Validator::make($row,[
                  'F26' => 'required',
                 'G26' => 'required',
                 'H26' => 'required',
                ],$messages)->validate();
                }

                if( ($row['C26']==null) && ($row['D26'] == null) && ($row[ 'E26'] == null) && ($row['F26'] != null) && ($row['G26'] == null) && ($row['H26'] == null))
              {
                Validator::make($row, [
                  'C26' => 'required',
                 'D26' => 'required',
                 'E26' => 'required',
                  'G26' => 'required',
                  'H26' => 'required',
                ],$messages)->validate();
                }
                if( ($row['C26']!=null) && ($row['D26'] != null) && ($row[ 'E26'] == null) && ($row['F26'] != null) && ($row['G26'] != null) && ($row['H26'] != null))
                {
                  Validator::make($row, [
                   'E26' => 'required',
                  ],$messages)->validate();
                  }

                  if( ($row['C26']!=null) && ($row['D26'] != null) && ($row[ 'E26'] != null) && ($row['F26'] != null) && ($row['G26'] == null) && ($row['H26'] != null))
                {
                  Validator::make($row, [
                   'G26' => 'required',
                  ],$messages)->validate();
                  }

                  
                  if( ($row['C26']!=null) && ($row['D26'] != null) && ($row[ 'E26'] != null) && ($row['F26'] == null) && ($row['G26'] != null) && ($row['H26'] != null))
                {
                  Validator::make($row, [
                   'F26' => 'required',
                  ],$messages)->validate();
                  }



                if( ($row['C26']!=null) && ($row['D26'] != null) && ($row[ 'E26'] != null) && ($row['F26'] != null) && ($row['G26'] == null) && ($row['H26'] == null))
              {
                Validator::make($row,[
                 'G26' => 'required',
                 'H26' => 'required',
                ],$messages)->validate();
                }

                if( ($row['C26']!=null) && ($row['D26'] != null) && ($row[ 'E26'] != null) && ($row['F26'] != null) && ($row['G26'] != null) && ($row['H26'] == null))
                {
                  Validator::make($row, [
                   'H26' => 'required',
                  ],$messages)->validate();
                  }

                  

                  //$d2 = DateTime::createFromFormat('d-m-Y', $row['C26'])->format('Y-m-d')? "" : null;
                  // dd(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['C14'])? "" : null);

                   if($row['C26'] != null){
          return new PartWorkedOn([
             'job_date'  => DateTime::createFromFormat('d-m-Y', $row['C26'])->format('Y-m-d'),
              'repair_code' => $row['D26'],
              'description' =>  $row[ 'E26'],
              'part_no'  => $row['F26'],
              'quantity'  => $row['G26'],
              'unit_price' => $row['H26'],
              'job_cards' => $row[ 'J7'],
              'outside_cost' => $row['M14'] + 0,
            ]);
           
           }
    }

 
}
