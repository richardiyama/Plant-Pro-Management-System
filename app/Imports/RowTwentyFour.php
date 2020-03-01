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
class RowTwentyFour implements WithMappedCells,ToModel
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
             'C24' => 'C24',
             'D24' => 'D24',
             'E24' => 'E24',
             'F24' => 'F24',
             'G24' => 'G24',
             'H24' => 'H24',
             'J7'  => 'J7',
             'M14' => 'M14',
             
             
      ];
    }

    
    public function model(array $row)
    {
      $messages = [
        'C24.required' => 'We need to know the Date the repair was perfomed in row 24!',
        'D24.required' => 'We need to know the repair code in row 24!',
        'E24.required' => 'We need to know the Description of the Part worked on in row 24!',
        'F24.required' => 'We need to know the Part or Serial Number in row 24!',
        'G24.required' => 'We need to know the Quantity in row 24 !',
        'H24.required' => 'We need to know the Unit Price in row 24!',
    ];

     if( ($row['C24'] !=null) && ($row['D24'] == null) && ($row[ 'E24'] != null) && ($row['F24'] == null) && ($row['G24'] != null) && ($row['H24'] == null))
     {
       Validator::make($row, [
       'D24' => 'required',
       'F24' => 'required',
       'H24' => 'required',
       ],$messages)->validate();
      }

      if( ($row['C24'] !=null) && ($row['D24'] == null) && ($row[ 'E24'] != null) && ($row['F24'] == null) && ($row['G24'] != null) && ($row['H24'] != null))
      {
        Validator::make($row, [
        'D24' => 'required',
        'F24' => 'required',
        ],$messages)->validate();
       }

      if( ($row['C24'] !=null) && ($row['D24'] == null) && ($row[ 'E24'] == null) && ($row['F24'] == null) && ($row['G24'] != null) && ($row['H24'] != null))
     {
       Validator::make($row, [
       'D24' => 'required',
       'E24' => 'required',
       'F24' => 'required',
       ],$messages)->validate();
      }


      if( ($row['C24'] !=null) && ($row['D24'] == null) && ($row[ 'E24'] == null) && ($row['F24'] == null) && ($row['G24'] != null) && ($row['H24'] != null))
      {
        Validator::make($row, [
        'D24' => 'required',
        'E24' => 'required',
        'F24' => 'required',
        ],$messages)->validate();
       }

      if( ($row['C24'] !=null) && ($row['D24'] == null) && ($row[ 'E24'] == null) && ($row['F24'] != null) && ($row['G24'] != null) && ($row['H24'] != null))
      {
        Validator::make($row, [
        'D24' => 'required',
        'E24' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C24'] !=null) && ($row['D24'] == null) && ($row[ 'E24'] != null) && ($row['F24'] == null) && ($row['G24'] != null) && ($row['H24'] != null))
      {
        Validator::make($row, [
        'D24' => 'required',
        'F24' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C24'] !=null) && ($row['D24'] == null) && ($row[ 'E24'] != null) && ($row['F24'] != null) && ($row['G24'] != null) && ($row['H24'] != null))
       {
         Validator::make($row, [
         'D24' => 'required',
         ],$messages)->validate();
        }
 

       if( ($row['C24'] !=null) && ($row['D24'] == null) && ($row[ 'E24'] == null) && ($row['F24'] != null) && ($row['G24'] == null) && ($row['H24'] != null))
       {
         Validator::make($row, [
         'D24' => 'required',
         'F24' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C24'] ==null) && ($row['D24'] == null) && ($row[ 'E24'] == null) && ($row['F24'] != null) && ($row['G24'] == null) && ($row['H24'] != null) )
        {
          Validator::make($row,[
          'C24' => 'required', 
          'D24' => 'required',
          'E24' => 'required',
          'G24' => 'required',
          ],$messages)->validate();
         }

        if( ($row['C24'] !=null) && ($row['D24'] == null) && ($row[ 'E24'] == null) && ($row['F24'] != null) && ($row['G24'] != null) && ($row['H24'] != null))
        {
          Validator::make($row,[
          'D24' => 'required',
          'F24' => 'required',
          ],$messages)->validate();
         }
 

       if( ($row['C24'] !=null) && ($row['D24'] != null) && ($row[ 'E24'] == null) && ($row['F24'] == null) && ($row['G24'] != null) && ($row['H24'] != null))
       {
         Validator::make($row, [
         'E24' => 'required',
         'F24' => 'required',
         ],$messages)->validate();
        }


      if( ($row['C24'] !=null) && ($row['D24'] == null) && ($row[ 'E24'] == null) && ($row['F24'] == null) && ($row['G24'] != null) && ($row['H24'] == null))
      {
        Validator::make($row,[
        'D24' => 'required',
        'E24' => 'required',
        'F24' => 'required',
        'H24' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C24'] !=null) && ($row['D24'] != null) && ($row[ 'E24'] == null) && ($row['F24'] == null) && ($row['G24'] != null) && ($row['H24'] == null))
       {
         Validator::make($row,[
         'E24' => 'required',
         'F24' => 'required',
         'H24' => 'required',
         ],$messages)->validate();
        }

      if( ($row['C24'] !=null) && ($row['D24'] == null) && ($row[ 'E24'] == null) && ($row['F24'] == null) && ($row['G24'] == null) && ($row['H24'] == null))
     {
       Validator::make($row, [
       'D24' => 'required',
       'E24' => 'required',
       'F24' => 'required',
       'G24' => 'required',
       'H24' => 'required',
       ],$messages)->validate();
      }

      if( ($row['C24'] ==null) && ($row['D24'] != null) && ($row[ 'E24'] == null) && ($row['F24'] == null) && ($row['G24'] == null) && ($row['H24'] != null))
      {
        Validator::make($row,[
        'C24' => 'required',
        'E24' => 'required',
        'F24' => 'required',
        'G24' => 'required',
        ],$messages)->validate();
       }


       if( ($row['C24'] ==null) && ($row['D24'] != null) && ($row[ 'E24'] == null) && ($row['F24'] == null) && ($row['G24'] != null) && ($row['H24'] != null))
       {
         Validator::make($row,[
         'C24' => 'required',
         'E24' => 'required',
         'F24' => 'required',
         ],$messages)->validate();
        }
    
      if( ($row['C24'] == null) && ($row['D24'] != null) && ($row[ 'E24'] == null) && ($row['F24'] == null) && ($row['G24'] == null) && ($row['H24'] == null))
      {
        Validator::make($row,[
        'C24' => 'required',
        'E24' => 'required',
        'F24' => 'required',
        'G24' => 'required',
        'H24' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C24'] == null) && ($row['D24'] == null) && ($row[ 'E24'] != null) && ($row['F24'] == null) && ($row['G24'] == null) && ($row['H24'] == null))
      {
        Validator::make($row,[
        'C24' => 'required',
        'D24' => 'required',
        'F24' => 'required',
        'G24' => 'required',
        'H24' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C24'] == null) && ($row['D24'] == null) && ($row[ 'E24'] == null) && ($row['F24'] != null) && ($row['G24'] == null) && ($row['H24'] == null))
       {
         Validator::make($row, [
         'C24' => 'required',
         'D24' => 'required',
         'E24' => 'required',
         'G24' => 'required',
         'H24' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C24'] == null) && ($row['D24'] == null) && ($row[ 'E24'] == null) && ($row['F24'] == null) && ($row['G24'] != null) && ($row['H24'] == null))
        {
          Validator::make($row, [
          'C24' => 'required',
          'D24' => 'required',
          'E24' => 'required',
          'F24' => 'required',
          'H24' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C24'] == null) && ($row['D24'] != null) && ($row[ 'E24'] == null) && ($row['F24'] == null) && ($row['G24'] != null) && ($row['H24'] == null))
         {
           Validator::make($row, [
           'C24' => 'required',
           'E24' => 'required',
           'F24' => 'required',
           'H24' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C24'] == null) && ($row['D24'] != null) && ($row[ 'E24'] == null) && ($row['F24'] == null) && ($row['G24'] != null) && ($row['H24'] == null))
         {
           Validator::make($row,[
           'C24' => 'required',
           'E24' => 'required',
           'F24' => 'required',
           'H24' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C24'] == null) && ($row['D24'] != null) && ($row[ 'E24'] == null) && ($row['F24'] != null) && ($row['G24'] != null) && ($row['H24'] == null))
          {
            Validator::make($row,[
            'C24' => 'required',
            'E24' => 'required',
            'H24' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C24'] == null) && ($row['D24'] != null) && ($row[ 'E24'] == null) && ($row['F24'] != null) && ($row['G24'] == null) && ($row['H24'] == null))
          {
            Validator::make($row,[
            'C24' => 'required',
            'E24' => 'required',
            'G24' => 'required',
            'H23' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C24'] == null) && ($row['D24'] != null) && ($row[ 'E24'] == null) && ($row['F24'] != null) && ($row['G24'] == null) && ($row['H24'] != null))
           {
             Validator::make($row, [
             'C24' => 'required',
             'E24' => 'required',
             'G24' => 'required',
             ],$messages)->validate();
            }

         if( ($row['C24'] != null) && ($row['D24'] == null) && ($row[ 'E24'] == null) && ($row['F24'] == null) && ($row['G24'] != null) && ($row['H24'] == null))
        {
          Validator::make($row,[
          'D24' => 'required',
          'E24' => 'required',
          'F24' => 'required',
          'H24' => 'required',
          ],$messages)->validate();
         }
         
         if( ($row['C24'] != null) && ($row['D24'] != null) && ($row[ 'E24'] == null) && ($row['F24'] != null) && ($row['G24'] == null) && ($row['H24'] != null))
         {
           Validator::make($row, [
           'E24' => 'required',
           'G24' => 'required',
           ],$messages)->validate();
          }

         if( ($row['C24'] != null) && ($row['D24'] != null) && ($row[ 'E24'] == null) && ($row['F24'] == null) && ($row['G24'] != null) && ($row['H24'] == null))
         {
           Validator::make($row, [
           'E24' => 'required',
           'F24' => 'required',
           'H24' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C24'] != null) && ($row['D24'] == null) && ($row[ 'E24'] == null) && ($row['F24'] != null) && ($row['G24'] == null) && ($row['H24'] == null))
          {
            Validator::make($row,[
              'D24' => 'required',
              'E24' => 'required',
              'G24' => 'required',
              'H24' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C24'] != null) && ($row['D24'] != null) && ($row[ 'E24'] == null) && ($row['F24'] != null) && ($row['G24'] == null) && ($row['H24'] == null))
           {
             Validator::make($row, [
               'E24' => 'required',
               'G24' => 'required',
               'H24' => 'required',
             ],$messages)->validate();
            }

          
          
          

         if( ($row['C24'] == null) && ($row['D24'] == null) && ($row[ 'E24'] == null) && ($row['F24'] == null) && ($row['G24'] == null) && ($row['H24'] != null))
         {
           Validator::make($row,[
           'C24' => 'required',
           'D24' => 'required',
           'E24' => 'required',
           'F24' => 'required',
           'G24' => 'required',
           ],$messages)->validate();
          }

        

          if( ($row['C24'] != null) && ($row['D24'] == null) && ($row[ 'E24'] == null) && ($row['F24'] == null) && ($row['G24'] == null) && ($row['H24'] == null))
          {
            Validator::make($row,[
            'D24' => 'required',
            'E24' => 'required',
            'F24' => 'required',
            'G24' => 'required',
            'H24' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C24'] != null) && ($row['D24'] == null) && ($row[ 'E24'] == null) && ($row['F24'] == null) && ($row['G24'] == null) && ($row['H24'] != null))
           {
             Validator::make($row,[
             'D24' => 'required',
             'E24' => 'required',
             'F24' => 'required',
             'G24' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C24'] != null) && ($row['D24'] != null) && ($row[ 'E24'] == null) && ($row['F24'] == null) && ($row['G24'] == null) && ($row['H24'] != null))
            {
              Validator::make($row, [
              'E24' => 'required',
              'F24' => 'required',
              'G24' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C24'] != null) && ($row['D24'] != null) && ($row[ 'E24'] != null) && ($row['F24'] == null) && ($row['G24'] == null) && ($row['H24'] != null))
            {
              Validator::make($row, [
              'F24' => 'required',
              'G24' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C24'] != null) && ($row['D24'] != null) && ($row[ 'E24'] != null) && ($row['F24'] != null) && ($row['G24'] == null) && ($row['H24'] != null))
             {
               Validator::make($row,[
               'G24' => 'required',
               ],$messages)->validate();
              }

            

           if( ($row['C24'] != null) && ($row['D24'] != null) && ($row[ 'E24'] == null) && ($row['F24'] == null) && ($row['G24'] == null) && ($row['H24'] == null))
          {
            Validator::make($row,[
            'E24' => 'required',
            'F24' => 'required',
            'G24' => 'required',
            'H24' => 'required',
            ],$messages)->validate();
           }

           
           if( ($row['C24'] == null) && ($row['D24'] != null) && ($row[ 'E24'] == null) && ($row['F24'] == null) && ($row['G24'] == null) && ($row['H24'] != null))
          {
            Validator::make($row, [
            'C24' => 'required', 
            'E24' => 'required',
            'F24' => 'required',
            'G24' => 'required',
            ],$messages)->validate();
           }

           
          


           if( ($row['C24'] == null) && ($row['D24'] == null) && ($row[ 'E24'] == null) && ($row['F24'] != null) && ($row['G24'] == null) && ($row['H24'] == null))
           {
             Validator::make($row,[
             'C24' => 'required', 
             'D24' => 'required',
             'E24' => 'required',
             'G24' => 'required',
             'H24' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C24'] == null) && ($row['D24'] == null) && ($row[ 'E24'] != null) && ($row['F24'] == null) && ($row['G24'] == null) && ($row['H24'] == null))
            {
              Validator::make($row, [
              'C24' => 'required', 
              'D24' => 'required',
              'F24' => 'required',
              'G24' => 'required',
              'H24' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C24'] == null) && ($row['D24'] == null) && ($row[ 'E24'] != null) && ($row['F24'] == null) && ($row['G24'] != null) && ($row['H24'] == null))
             {
               Validator::make($row,[
               'C24' => 'required', 
               'D24' => 'required',
               'F24' => 'required',
               'H24' => 'required',
               ],$messages)->validate();
              }

              if( ($row['C24'] == null) && ($row['D24'] != null) && ($row[ 'E24'] != null) && ($row['F24'] == null) && ($row['G24'] == null) && ($row['H24'] == null))
             {
               Validator::make($row,[
               'C24' => 'required', 
               'F24' => 'required',
               'G24' => 'required',
               'H24' => 'required',
               ],$messages)->validate();
              }

             if( ($row['C24'] == null) && ($row['D24'] != null) && ($row[ 'E24'] == null) && ($row['F24'] != null) && ($row['G24'] == null) && ($row['H24'] == null))
            {
              Validator::make($row, [
              'C24' => 'required', 
              'G24' => 'required',
              'H24' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C24'] == null) && ($row['D24'] == null) && ($row[ 'E24'] != null) && ($row['F24'] == null) && ($row['G24'] == null) && ($row['H24'] != null))
             {
               Validator::make($row,[
               'C24' => 'required', 
               'D24' => 'required',
               'F24' => 'required',
               'G24' => 'required',
               ],$messages)->validate();
              }
 
             if( ($row['C24'] == null) && ($row['D24'] != null) && ($row[ 'E24'] == null) && ($row['F24'] == null) && ($row['G24'] == null) && ($row['H24'] == null))
            {
              Validator::make($row,[
              'C24' => 'required', 
              'E24' => 'required',
              'F24' => 'required',
              'G24' => 'required',
              'H24' => 'required',
              ],$messages)->validate();
             }

           if( ($row['C24'] != null) && ($row['D24'] != null) && ($row[ 'E24'] != null) && ($row['F24'] == null) && ($row['G24'] == null) && ($row['H24'] == null))
           {
             Validator::make($row, [
             'F24' => 'required',
             'G24' => 'required',
             'H24' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C24'] != null) && ($row['D24'] != null) && ($row[ 'E24'] != null) && ($row['F24'] != null) && ($row['G24'] == null) && ($row['H24'] == null))
           {
             Validator::make($row,[
             'G24' => 'required',
             'H24' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C24'] != null) && ($row['D24'] != null) && ($row[ 'E24'] != null) && ($row['F24'] != null) && ($row['G24'] != null) && ($row['H24'] == null))
            {
              Validator::make($row, [
              'H24' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C24'] == null) && ($row['D24'] == null) && ($row[ 'E24'] == null) && ($row['F24'] == null) && ($row['G24'] != null) && ($row['H24'] == null))
            {
              Validator::make($row,[
              'C24' => 'required',
              'D24' => 'required',
              'E24' => 'required',
              'F24' => 'required',
              'H24' => 'required',
              ],$messages)->validate();
             }

          if( ($row['C24'] == null) && ($row['D24'] == null) && ($row[ 'E24'] == null) && ($row['F24'] == null) && ($row['G24'] == null) && ($row['H24'] != null))
         {
           Validator::make($row, [
           'C24' => 'required',
           'D24' => 'required',
           'E24' => 'required',
           'F24' => 'required',
           'G24' => 'required',
           ],$messages)->validate();
          }
         if( ($row['C24'] == null) && ($row['D24'] == null) && ($row[ 'E24'] == null) && ($row['F24'] == null) && ($row['G24'] != null) && ($row['H24'] != null))
        {
          Validator::make($row, [
          'C24' => 'required',
          'D24' => 'required',
          'E24' => 'required',
          'F24' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C24'] == null) && ($row['D24'] == null) && ($row[ 'E24'] == null) && ($row['F24'] == null) && ($row['G24'] != null) && ($row['H24'] != null))
         {
           Validator::make($row,[
           'C24' => 'required',
           'D24' => 'required',
           'E24' => 'required',
           'F24' => 'required',
           ],$messages)->validate();
          }
 

        if( ($row['C24'] == null) && ($row['D24'] == null) && ($row[ 'E24'] == null) && ($row['F24'] != null) && ($row['G24'] != null) && ($row['H24'] == null))
        {
          Validator::make($row, [
          'C24' => 'required',
          'D24' => 'required',
          'E24' => 'required',
          'H24' => 'required',
          ],$messages)->validate();
         }


         if( ($row['C24'] == null) && ($row['D24'] == null) && ($row[ 'E24'] == null) && ($row['F24'] != null) && ($row['G24'] != null) && ($row['H24'] != null))
        {
          Validator::make($row, [
          'C24' => 'required',
          'D24' => 'required',
          'E24' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C24'] == null) && ($row['D24'] == null) && ($row[ 'E24'] == null) && ($row['F24'] != null) && ($row['G24'] != null) && ($row['H24'] != null))
         {
           Validator::make($row, [
           'C24' => 'required',
           'D24' => 'required',
           'E24' => 'required',
           ],$messages)->validate();
          }

       if( ($row['C24'] == null) && ($row['D24'] == null) && ($row[ 'E24'] != null) && ($row['F24'] != null) && ($row['G24'] == null) && ($row['H24'] == null))
       {
         Validator::make($row, [
         'C24' => 'required',
         'G24' => 'required',
         'H24' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C24'] == null) && ($row['D24'] == null) && ($row[ 'E24'] != null) && ($row['F24'] != null) && ($row['G24'] != null) && ($row['H24'] == null))
       {
         Validator::make($row,[
         'C24' => 'required',
         'D24' => 'required',
         'H24' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C24'] == null) && ($row['D24'] == null) && ($row[ 'E24'] != null) && ($row['F24'] != null) && ($row['G24'] != null) && ($row['H24'] != null) )
        {
          Validator::make($row, [
          'C24' => 'required',
          'D24' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C24'] == null) && ($row['D24'] == null) && ($row[ 'E24'] != null) && ($row['F24'] != null) && ($row['G24'] != null) && ($row['H24'] != null))
        {
          Validator::make($row,[
          'C24' => 'required',
          'D24' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C24'] == null) && ($row['D24'] == null) && ($row[ 'E24'] != null) && ($row['F24'] != null) && ($row['G24'] != null) && ($row['H24'] != null) )
        {
          Validator::make($row, [
          'C24' => 'required',
          'D24' => 'required',
          ],$messages)->validate();
         }

       if( ($row['C24'] == null) && ($row['D24'] != null) && ($row[ 'E24'] != null) && ($row['F24'] == null) && ($row['G24'] == null) && ($row['H24'] == null))
       {
         Validator::make($row,[
         'C24' => 'required',
         'F24' => 'required',
         'G24' => 'required',
         'H24' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C24'] == null) && ($row['D24'] != null) && ($row[ 'E24'] != null) && ($row['F24'] != null) && ($row['G24'] == null) && ($row['H24'] == null))
       {
         Validator::make($row, [
         'C24' => 'required',
         'G24' => 'required',
         'H24' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C24'] == null) && ($row['D24'] != null) && ($row[ 'E24'] != null) && ($row['F24'] != null) && ($row['G24'] != null) && ($row['H24'] == null))
        {
          Validator::make($row,[
          'C24' => 'required',
          'H24' => 'required',
          ],$messages)->validate();
         }

          if( ($row['C24'] == null) && ($row['D24'] != null) && ($row[ 'E24'] != null) && ($row['F24'] != null) && ($row['G24'] != null) && ($row['H24'] != null))
          {
            Validator::make($row,[
            'C24' => 'required',
            ],$messages)->validate();
           }
      
            if( ($row['C24']!=null) && ($row['D24'] != null) && ($row[ 'E24'] == null) && ($row['F24'] == null) && ($row['G24'] == null) && ($row['H24'] == null))
            {
              Validator::make($row, [
               'E24' => 'required',
                'F24' => 'required',
               'G24' => 'required',
               'H24' => 'required',
              ],$messages)->validate();
              }
        
              if( ($row['C24']!=null) && ($row['D24'] != null) && ($row[ 'E24'] != null) && ($row['F24'] == null) && ($row['G24'] == null) && ($row['H24'] == null))
              {
                Validator::make($row,[
                  'F24' => 'required',
                 'G24' => 'required',
                 'H24' => 'required',
                ],$messages)->validate();
                }

                if( ($row['C24']==null) && ($row['D24'] == null) && ($row[ 'E24'] == null) && ($row['F24'] != null) && ($row['G24'] == null) && ($row['H24'] == null))
              {
                Validator::make($row, [
                  'C24' => 'required',
                 'D24' => 'required',
                 'E24' => 'required',
                  'G24' => 'required',
                  'H24' => 'required',
                ],$messages)->validate();
                }
                if( ($row['C24']!=null) && ($row['D24'] != null) && ($row[ 'E24'] == null) && ($row['F24'] != null) && ($row['G24'] != null) && ($row['H24'] != null))
                {
                  Validator::make($row, [
                   'E24' => 'required',
                  ],$messages)->validate();
                  }

                  if( ($row['C24']!=null) && ($row['D24'] != null) && ($row[ 'E24'] != null) && ($row['F24'] != null) && ($row['G24'] == null) && ($row['H24'] != null))
                {
                  Validator::make($row, [
                   'G24' => 'required',
                  ],$messages)->validate();
                  }

                  
                  if( ($row['C24']!=null) && ($row['D24'] != null) && ($row[ 'E24'] != null) && ($row['F24'] == null) && ($row['G24'] != null) && ($row['H24'] != null))
                {
                  Validator::make($row, [
                   'F24' => 'required',
                  ],$messages)->validate();
                  }



                if( ($row['C24']!=null) && ($row['D24'] != null) && ($row[ 'E24'] != null) && ($row['F24'] != null) && ($row['G24'] == null) && ($row['H24'] == null))
              {
                Validator::make($row,[
                 'G24' => 'required',
                 'H24' => 'required',
                ],$messages)->validate();
                }

                if( ($row['C24']!=null) && ($row['D24'] != null) && ($row[ 'E24'] != null) && ($row['F24'] != null) && ($row['G24'] != null) && ($row['H24'] == null))
                {
                  Validator::make($row, [
                   'H24' => 'required',
                  ],$messages)->validate();
                  }

                  
                  
                  //$d2 = DateTime::createFromFormat('d-m-Y', $row['C24'])->format('Y-m-d')? "" : null;
                  // dd(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['C14'])? "" : null);

                   if($row['C24'] != null){
          return new PartWorkedOn([
             'job_date'  => DateTime::createFromFormat('d-m-Y', $row['C24'])->format('Y-m-d'),
              'repair_code' => $row['D24'],
              'description' =>  $row[ 'E24'],
              'part_no'  => $row['F24'],
              'quantity'  => $row['G24'],
              'unit_price' => $row['H24'],
              'job_cards' => $row[ 'J7'],
              'outside_cost' => $row['M14'] + 0,
            ]);
           
           }
    }

 
}
