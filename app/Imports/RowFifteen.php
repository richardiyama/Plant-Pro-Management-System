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

class RowFifteen implements WithMappedCells,ToModel
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
             'C15' => 'C15',
             'D15' => 'D15',
             'E15' => 'E15',
             'F15' => 'F15',
             'G15' => 'G15',
             'H15' => 'H15',
             'J7'  => 'J7',
             'P23' => 'P23',
             'M14' => 'M14',
             
             
      ];
    }

    
    public function model(array $row)
    {
      $messages = [
        'C15.required' => 'We need to know the Date the repair was perfomed in row 15!',
        'D15.required' => 'We need to know the repair code in row 15!',
        'E15.required' => 'We need to know the Description of the Part worked on in row 15!',
        'F15.required' => 'We need to know the Part or Serial Number in row 15!',
        'G15.required' => 'We need to know the Quantity in row 15 !',
        'H15.required' => 'We need to know the Unit Price in row 15!',
    ];

     if( ($row['C15'] !=null) && ($row['D15'] == null) && ($row[ 'E15'] != null) && ($row['F15'] == null) && ($row['G15'] != null) && ($row['H15'] == null))
     {
       Validator::make($row, [
       'D15' => 'required',
       'F15' => 'required',
       'H15' => 'required',
       ],$messages)->validate();
      }

      if( ($row['C15'] !=null) && ($row['D15'] == null) && ($row[ 'E15'] != null) && ($row['F15'] == null) && ($row['G15'] != null) && ($row['H15'] != null))
      {
        Validator::make($row, [
        'D15' => 'required',
        'F15' => 'required',
        ],$messages)->validate();
       }

      if( ($row['C15'] !=null) && ($row['D15'] == null) && ($row[ 'E15'] == null) && ($row['F15'] == null) && ($row['G15'] != null) && ($row['H15'] != null))
     {
       Validator::make($row, [
       'D15' => 'required',
       'E15' => 'required',
       'F15' => 'required',
       ],$messages)->validate();
      }


      if( ($row['C15'] !=null) && ($row['D15'] == null) && ($row[ 'E15'] == null) && ($row['F15'] == null) && ($row['G15'] != null) && ($row['H15'] != null))
      {
        Validator::make($row, [
        'D15' => 'required',
        'E15' => 'required',
        'F15' => 'required',
        ],$messages)->validate();
       }

      if( ($row['C15'] !=null) && ($row['D15'] == null) && ($row[ 'E15'] == null) && ($row['F15'] != null) && ($row['G15'] != null) && ($row['H15'] != null))
      {
        Validator::make($row, [
        'D15' => 'required',
        'E15' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C15'] !=null) && ($row['D15'] == null) && ($row[ 'E15'] != null) && ($row['F15'] == null) && ($row['G15'] != null) && ($row['H15'] != null))
      {
        Validator::make($row, [
        'D15' => 'required',
        'F15' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C15'] !=null) && ($row['D15'] == null) && ($row[ 'E15'] != null) && ($row['F15'] != null) && ($row['G15'] != null) && ($row['H15'] != null))
       {
         Validator::make($row, [
         'D15' => 'required',
         ],$messages)->validate();
        }
 

       if( ($row['C15'] !=null) && ($row['D15'] == null) && ($row[ 'E15'] == null) && ($row['F15'] != null) && ($row['G15'] == null) && ($row['H15'] != null))
       {
         Validator::make($row, [
         'D15' => 'required',
         'F15' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C15'] ==null) && ($row['D15'] == null) && ($row[ 'E15'] == null) && ($row['F15'] != null) && ($row['G15'] == null) && ($row['H15'] != null))
        {
          Validator::make($row,[
          'C15' => 'required', 
          'D15' => 'required',
          'E15' => 'required',
          'G15' => 'required',
          ],$messages)->validate();
         }

        if( ($row['C15'] !=null) && ($row['D15'] == null) && ($row[ 'E15'] == null) && ($row['F15'] != null) && ($row['G15'] != null) && ($row['H15'] != null))
        {
          Validator::make($row,[
          'D15' => 'required',
          'F15' => 'required',
          ],$messages)->validate();
         }
 

       if( ($row['C15'] !=null) && ($row['D15'] != null) && ($row[ 'E15'] == null) && ($row['F15'] == null) && ($row['G15'] != null) && ($row['H15'] != null))
       {
         Validator::make($row, [
         'E15' => 'required',
         'F15' => 'required',
         ],$messages)->validate();
        }


      if( ($row['C15'] !=null) && ($row['D15'] == null) && ($row[ 'E15'] == null) && ($row['F15'] == null) && ($row['G15'] != null) && ($row['H15'] == null))
      {
        Validator::make($row,[
        'D15' => 'required',
        'E15' => 'required',
        'F15' => 'required',
        'H15' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C15'] !=null) && ($row['D15'] != null) && ($row[ 'E15'] == null) && ($row['F15'] == null) && ($row['G15'] != null) && ($row['H15'] == null))
       {
         Validator::make($row,[
         'E15' => 'required',
         'F15' => 'required',
         'H15' => 'required',
         ],$messages)->validate();
        }

      if( ($row['C15'] !=null) && ($row['D15'] == null) && ($row[ 'E15'] == null) && ($row['F15'] == null) && ($row['G15'] == null) && ($row['H15'] == null))
     {
       Validator::make($row, [
       'D15' => 'required',
       'E15' => 'required',
       'F15' => 'required',
       'G15' => 'required',
       'H15' => 'required',
       ],$messages)->validate();
      }

      if( ($row['C15'] ==null) && ($row['D15'] != null) && ($row[ 'E15'] == null) && ($row['F15'] == null) && ($row['G15'] == null) && ($row['H15'] != null))
      {
        Validator::make($row,[
        'C15' => 'required',
        'E15' => 'required',
        'F15' => 'required',
        'G15' => 'required',
        ],$messages)->validate();
       }


       if( ($row['C15'] ==null) && ($row['D15'] != null) && ($row[ 'E15'] == null) && ($row['F15'] == null) && ($row['G15'] != null) && ($row['H15'] != null))
       {
         Validator::make($row,[
         'C15' => 'required',
         'E15' => 'required',
         'F15' => 'required',
         ],$messages)->validate();
        }
    
      if( ($row['C15'] == null) && ($row['D15'] != null) && ($row[ 'E15'] == null) && ($row['F15'] == null) && ($row['G15'] == null) && ($row['H15'] == null))
      {
        Validator::make($row,[
        'C15' => 'required',
        'E15' => 'required',
        'F15' => 'required',
        'G15' => 'required',
        'H15' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C15'] == null) && ($row['D15'] == null) && ($row[ 'E15'] != null) && ($row['F15'] == null) && ($row['G15'] == null) && ($row['H15'] == null))
      {
        Validator::make($row,[
        'C15' => 'required',
        'D15' => 'required',
        'F15' => 'required',
        'G15' => 'required',
        'H15' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C15'] == null) && ($row['D15'] == null) && ($row[ 'E15'] == null) && ($row['F15'] != null) && ($row['G15'] == null) && ($row['H15'] == null))
       {
         Validator::make($row, [
         'C15' => 'required',
         'D15' => 'required',
         'E15' => 'required',
         'G15' => 'required',
         'H15' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C15'] == null) && ($row['D15'] == null) && ($row[ 'E15'] == null) && ($row['F15'] == null) && ($row['G15'] != null) && ($row['H15'] == null))
        {
          Validator::make($row, [
          'C15' => 'required',
          'D15' => 'required',
          'E15' => 'required',
          'F15' => 'required',
          'H15' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C15'] == null) && ($row['D15'] != null) && ($row[ 'E15'] == null) && ($row['F15'] == null) && ($row['G15'] != null) && ($row['H15'] == null))
         {
           Validator::make($row, [
           'C15' => 'required',
           'E15' => 'required',
           'F15' => 'required',
           'H15' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C15'] == null) && ($row['D15'] != null) && ($row[ 'E15'] == null) && ($row['F15'] == null) && ($row['G15'] != null) && ($row['H15'] == null))
         {
           Validator::make($row,[
           'C15' => 'required',
           'E15' => 'required',
           'F15' => 'required',
           'H15' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C15'] == null) && ($row['D15'] != null) && ($row[ 'E15'] == null) && ($row['F15'] != null) && ($row['G15'] != null) && ($row['H15'] == null))
          {
            Validator::make($row,[
            'C15' => 'required',
            'E15' => 'required',
            'H15' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C15'] == null) && ($row['D15'] != null) && ($row[ 'E15'] == null) && ($row['F15'] != null) && ($row['G15'] == null) && ($row['H15'] == null))
          {
            Validator::make($row,[
            'C15' => 'required',
            'E15' => 'required',
            'G15' => 'required',
            'H15' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C15'] == null) && ($row['D15'] != null) && ($row[ 'E15'] == null) && ($row['F15'] != null) && ($row['G15'] == null) && ($row['H15'] != null))
           {
             Validator::make($row, [
             'C15' => 'required',
             'E15' => 'required',
             'G15' => 'required',
             ],$messages)->validate();
            }

         if( ($row['C15'] != null) && ($row['D15'] == null) && ($row[ 'E15'] == null) && ($row['F15'] == null) && ($row['G15'] != null) && ($row['H15'] == null))
        {
          Validator::make($row,[
          'D15' => 'required',
          'E15' => 'required',
          'F15' => 'required',
          'H15' => 'required',
          ],$messages)->validate();
         }
         
         if( ($row['C15'] != null) && ($row['D15'] != null) && ($row[ 'E15'] == null) && ($row['F15'] != null) && ($row['G15'] == null) && ($row['H15'] != null))
         {
           Validator::make($row, [
           'E15' => 'required',
           'G15' => 'required',
           ],$messages)->validate();
          }

         if( ($row['C15'] != null) && ($row['D15'] != null) && ($row[ 'E15'] == null) && ($row['F15'] == null) && ($row['G15'] != null) && ($row['H15'] == null))
         {
           Validator::make($row, [
           'E15' => 'required',
           'F15' => 'required',
           'H15' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C15'] != null) && ($row['D15'] == null) && ($row[ 'E15'] == null) && ($row['F15'] != null) && ($row['G15'] == null) && ($row['H15'] == null))
          {
            Validator::make($row,[
              'D15' => 'required',
              'E15' => 'required',
              'G15' => 'required',
              'H15' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C15'] != null) && ($row['D15'] != null) && ($row[ 'E15'] == null) && ($row['F15'] != null) && ($row['G15'] == null) && ($row['H15'] == null))
           {
             Validator::make($row, [
               'E15' => 'required',
               'G15' => 'required',
               'H15' => 'required',
             ],$messages)->validate();
            }

          
          
          

         if( ($row['C15'] == null) && ($row['D15'] == null) && ($row[ 'E15'] == null) && ($row['F15'] == null) && ($row['G15'] == null) && ($row['H15'] != null))
         {
           Validator::make($row,[
           'C15' => 'required',
           'D15' => 'required',
           'E15' => 'required',
           'F15' => 'required',
           'G15' => 'required',
           ],$messages)->validate();
          }

       

          if( ($row['C15'] != null) && ($row['D15'] == null) && ($row[ 'E15'] == null) && ($row['F15'] == null) && ($row['G15'] == null) && ($row['H15'] == null))
          {
            Validator::make($row,[
            'D15' => 'required',
            'E15' => 'required',
            'F15' => 'required',
            'G15' => 'required',
            'H15' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C15'] != null) && ($row['D15'] == null) && ($row[ 'E15'] == null) && ($row['F15'] == null) && ($row['G15'] == null) && ($row['H15'] != null))
           {
             Validator::make($row,[
             'D15' => 'required',
             'E15' => 'required',
             'F15' => 'required',
             'G15' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C15'] != null) && ($row['D15'] != null) && ($row[ 'E15'] == null) && ($row['F15'] == null) && ($row['G15'] == null) && ($row['H15'] != null))
            {
              Validator::make($row, [
              'E15' => 'required',
              'F15' => 'required',
              'G15' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C15'] != null) && ($row['D15'] != null) && ($row[ 'E15'] != null) && ($row['F15'] == null) && ($row['G15'] == null) && ($row['H15'] != null))
            {
              Validator::make($row, [
              'F15' => 'required',
              'G15' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C15'] != null) && ($row['D15'] != null) && ($row[ 'E15'] != null) && ($row['F15'] != null) && ($row['G15'] == null) && ($row['H15'] != null))
             {
               Validator::make($row,[
               'G15' => 'required',
               ],$messages)->validate();
              }

            

           if( ($row['C15'] != null) && ($row['D15'] != null) && ($row[ 'E15'] == null) && ($row['F15'] == null) && ($row['G15'] == null) && ($row['H15'] == null))
          {
            Validator::make($row,[
            'E15' => 'required',
            'F15' => 'required',
            'G15' => 'required',
            'H15' => 'required',
            ],$messages)->validate();
           }

           
           if( ($row['C15'] == null) && ($row['D15'] != null) && ($row[ 'E15'] == null) && ($row['F15'] == null) && ($row['G15'] == null) && ($row['H15'] != null))
          {
            Validator::make($row, [
            'C15' => 'required', 
            'E15' => 'required',
            'F15' => 'required',
            'G15' => 'required',
            ],$messages)->validate();
           }

           
          


           if( ($row['C15'] == null) && ($row['D15'] == null) && ($row[ 'E15'] == null) && ($row['F15'] != null) && ($row['G15'] == null) && ($row['H15'] == null))
           {
             Validator::make($row,[
             'C15' => 'required', 
             'D15' => 'required',
             'E15' => 'required',
             'G15' => 'required',
             'H15' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C15'] == null) && ($row['D15'] == null) && ($row[ 'E15'] != null) && ($row['F15'] == null) && ($row['G15'] == null) && ($row['H15'] == null))
            {
              Validator::make($row, [
              'C15' => 'required', 
              'D15' => 'required',
              'F15' => 'required',
              'G15' => 'required',
              'H15' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C15'] == null) && ($row['D15'] == null) && ($row[ 'E15'] != null) && ($row['F15'] == null) && ($row['G15'] != null) && ($row['H15'] == null))
             {
               Validator::make($row,[
               'C15' => 'required', 
               'D15' => 'required',
               'F15' => 'required',
               'H15' => 'required',
               ],$messages)->validate();
              }

              if( ($row['C15'] == null) && ($row['D15'] != null) && ($row[ 'E15'] != null) && ($row['F15'] == null) && ($row['G15'] == null) && ($row['H15'] == null))
             {
               Validator::make($row,[
               'C15' => 'required', 
               'F15' => 'required',
               'G15' => 'required',
               'H15' => 'required',
               ],$messages)->validate();
              }

             if( ($row['C15'] == null) && ($row['D15'] != null) && ($row[ 'E15'] == null) && ($row['F15'] != null) && ($row['G15'] == null) && ($row['H15'] == null) )
            {
              Validator::make($row, [
              'C15' => 'required', 
              'G15' => 'required',
              'H15' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C15'] == null) && ($row['D15'] == null) && ($row[ 'E15'] != null) && ($row['F15'] == null) && ($row['G15'] == null) && ($row['H15'] != null))
             {
               Validator::make($row,[
               'C15' => 'required', 
               'D15' => 'required',
               'F15' => 'required',
               'G15' => 'required',
               ],$messages)->validate();
              }
 
             if( ($row['C15'] == null) && ($row['D15'] != null) && ($row[ 'E15'] == null) && ($row['F15'] == null) && ($row['G15'] == null) && ($row['H15'] == null))
            {
              Validator::make($row,[
              'C15' => 'required', 
              'E15' => 'required',
              'F15' => 'required',
              'G15' => 'required',
              'H15' => 'required',
              ],$messages)->validate();
             }

           if( ($row['C15'] != null) && ($row['D15'] != null) && ($row[ 'E15'] != null) && ($row['F15'] == null) && ($row['G15'] == null) && ($row['H15'] == null))
           {
             Validator::make($row, [
             'F15' => 'required',
             'G15' => 'required',
             'H15' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C15'] != null) && ($row['D15'] != null) && ($row[ 'E15'] != null) && ($row['F15'] != null) && ($row['G15'] == null) && ($row['H15'] == null))
           {
             Validator::make($row,[
             'G15' => 'required',
             'H15' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C15'] != null) && ($row['D15'] != null) && ($row[ 'E15'] != null) && ($row['F15'] != null) && ($row['G15'] != null) && ($row['H15'] == null))
            {
              Validator::make($row, [
              'H15' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C15'] == null) && ($row['D15'] == null) && ($row[ 'E15'] == null) && ($row['F15'] == null) && ($row['G15'] != null) && ($row['H15'] == null))
            {
              Validator::make($row,[
              'C15' => 'required',
              'D15' => 'required',
              'E15' => 'required',
              'F15' => 'required',
              'H15' => 'required',
              ],$messages)->validate();
             }

          if( ($row['C15'] == null) && ($row['D15'] == null) && ($row[ 'E15'] == null) && ($row['F15'] == null) && ($row['G15'] == null) && ($row['H15'] != null))
         {
           Validator::make($row, [
           'C15' => 'required',
           'D15' => 'required',
           'E15' => 'required',
           'F15' => 'required',
           'G15' => 'required',
           ],$messages)->validate();
          }
         if( ($row['C15'] == null) && ($row['D15'] == null) && ($row[ 'E15'] == null) && ($row['F15'] == null) && ($row['G15'] != null) && ($row['H15'] != null))
        {
          Validator::make($row, [
          'C15' => 'required',
          'D15' => 'required',
          'E15' => 'required',
          'F15' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C15'] == null) && ($row['D15'] == null) && ($row[ 'E15'] == null) && ($row['F15'] == null) && ($row['G15'] != null) && ($row['H15'] != null))
         {
           Validator::make($row,[
           'C15' => 'required',
           'D15' => 'required',
           'E15' => 'required',
           'F15' => 'required',
           ],$messages)->validate();
          }
 

        if( ($row['C15'] == null) && ($row['D15'] == null) && ($row[ 'E15'] == null) && ($row['F15'] != null) && ($row['G15'] != null) && ($row['H15'] == null))
        {
          Validator::make($row, [
          'C15' => 'required',
          'D15' => 'required',
          'E15' => 'required',
          'H15' => 'required',
          ],$messages)->validate();
         }


         if( ($row['C15'] == null) && ($row['D15'] == null) && ($row[ 'E15'] == null) && ($row['F15'] != null) && ($row['G15'] != null) && ($row['H15'] != null))
        {
          Validator::make($row, [
          'C15' => 'required',
          'D15' => 'required',
          'E15' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C15'] == null) && ($row['D15'] == null) && ($row[ 'E15'] == null) && ($row['F15'] != null) && ($row['G15'] != null) && ($row['H15'] != null) )
         {
           Validator::make($row, [
           'C15' => 'required',
           'D15' => 'required',
           'E15' => 'required',
           ],$messages)->validate();
          }

       if( ($row['C15'] == null) && ($row['D15'] == null) && ($row[ 'E15'] != null) && ($row['F15'] != null) && ($row['G15'] == null) && ($row['H15'] == null))
       {
         Validator::make($row, [
         'C15' => 'required',
         'G15' => 'required',
         'H15' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C15'] == null) && ($row['D15'] == null) && ($row[ 'E15'] != null) && ($row['F15'] != null) && ($row['G15'] != null) && ($row['H15'] == null))
       {
         Validator::make($row,[
         'C15' => 'required',
         'D15' => 'required',
         'H15' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C15'] == null) && ($row['D15'] == null) && ($row[ 'E15'] != null) && ($row['F15'] != null) && ($row['G15'] != null) && ($row['H15'] != null))
        {
          Validator::make($row, [
          'C15' => 'required',
          'D15' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C15'] == null) && ($row['D15'] == null) && ($row[ 'E15'] != null) && ($row['F15'] != null) && ($row['G15'] != null) && ($row['H15'] != null))
        {
          Validator::make($row,[
          'C15' => 'required',
          'D15' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C15'] == null) && ($row['D15'] == null) && ($row[ 'E15'] != null) && ($row['F15'] != null) && ($row['G15'] != null) && ($row['H15'] != null))
        {
          Validator::make($row, [
          'C15' => 'required',
          'D15' => 'required',
          ],$messages)->validate();
         }

       if( ($row['C15'] == null) && ($row['D15'] != null) && ($row[ 'E15'] != null) && ($row['F15'] == null) && ($row['G15'] == null) && ($row['H15'] == null))
       {
         Validator::make($row,[
         'C15' => 'required',
         'F15' => 'required',
         'G15' => 'required',
         'H15' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C15'] == null) && ($row['D15'] != null) && ($row[ 'E15'] != null) && ($row['F15'] != null) && ($row['G15'] == null) && ($row['H15'] == null))
       {
         Validator::make($row, [
         'C15' => 'required',
         'G15' => 'required',
         'H15' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C15'] == null) && ($row['D15'] != null) && ($row[ 'E15'] != null) && ($row['F15'] != null) && ($row['G15'] != null) && ($row['H15'] == null))
        {
          Validator::make($row,[
          'C15' => 'required',
          'H15' => 'required',
          ],$messages)->validate();
         }

        
          if( ($row['C15'] == null) && ($row['D15'] != null) && ($row[ 'E15'] != null) && ($row['F15'] != null) && ($row['G15'] != null) && ($row['H15'] != null))
          {
            Validator::make($row,[
            'C15' => 'required',
            ],$messages)->validate();
           }
      
            if( ($row['C15']!=null) && ($row['D15'] != null) && ($row[ 'E15'] == null) && ($row['F15'] == null) && ($row['G15'] == null) && ($row['H15'] == null))
            {
              Validator::make($row, [
               'E15' => 'required',
                'F15' => 'required',
               'G15' => 'required',
               'H15' => 'required',
              ],$messages)->validate();
              }
        
              if( ($row['C15']!=null) && ($row['D15'] != null) && ($row[ 'E15'] != null) && ($row['F15'] == null) && ($row['G15'] == null) && ($row['H15'] == null) )
              {
                Validator::make($row,[
                  'F15' => 'required',
                 'G15' => 'required',
                 'H15' => 'required',
                ],$messages)->validate();
                }

                if( ($row['C15']==null) && ($row['D15'] == null) && ($row[ 'E15'] == null) && ($row['F15'] != null) && ($row['G15'] == null) && ($row['H15'] == null))
              {
                Validator::make($row, [
                  'C15' => 'required',
                 'D15' => 'required',
                 'E15' => 'required',
                  'G15' => 'required',
                  'H15' => 'required',
                ],$messages)->validate();
                }
                if( ($row['C15']!=null) && ($row['D15'] != null) && ($row[ 'E15'] == null) && ($row['F15'] != null) && ($row['G15'] != null) && ($row['H15'] != null))
                {
                  Validator::make($row, [
                   'E15' => 'required',
                  ],$messages)->validate();
                  }

                  if( ($row['C15']!=null) && ($row['D15'] != null) && ($row[ 'E15'] != null) && ($row['F15'] != null) && ($row['G15'] == null) && ($row['H15'] != null))
                {
                  Validator::make($row, [
                   'G15' => 'required',
                  ],$messages)->validate();
                  }

                  
                  if( ($row['C15']!=null) && ($row['D15'] != null) && ($row[ 'E15'] != null) && ($row['F15'] == null) && ($row['G15'] != null) && ($row['H15'] != null) )
                {
                  Validator::make($row, [
                   'F15' => 'required',
                  ],$messages)->validate();
                  }



                if( ($row['C15']!=null) && ($row['D15'] != null) && ($row[ 'E15'] != null) && ($row['F15'] != null) && ($row['G15'] == null) && ($row['H15'] == null))
              {
                Validator::make($row,[
                 'G15' => 'required',
                 'H15' => 'required',
                ],$messages)->validate();
                }

                if( ($row['C15']!=null) && ($row['D15'] != null) && ($row[ 'E15'] != null) && ($row['F15'] != null) && ($row['G15'] != null) && ($row['H15'] == null))
                {
                  Validator::make($row, [
                   'H15' => 'required',
                  ],$messages)->validate();
                  }

                 
                 
                 // $d2 = DateTime::createFromFormat('d-m-Y', $row['C15'])->format('Y-m-d')? "" : null;
                   // dd(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['C14'])? "" : null);

                    if($row['C15'] != null){
           return new PartWorkedOn([
              'job_date'  => DateTime::createFromFormat('d-m-Y', $row['C15'])->format('Y-m-d'),
              'repair_code' => $row['D15'],
              'description' =>  $row[ 'E15'],
              'part_no'  => $row['F15'],
              'quantity'  => $row['G15'],
              'unit_price' => $row['H15'],
              'job_cards' => $row[ 'J7'],
              'cost' => $row['P23'] * 1200,
              'outside_cost' => $row['M14'] + 0,
            ]);
           
           }
    }

 
}