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
class PartWorkedOnImport implements WithMappedCells,ToModel
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
             'C14' => 'C14',
             'D14' => 'D14',
             'E14' => 'E14',
             'F14' => 'F14',
             'G14' => 'G14',
             'H14' => 'H14',
             'J7'  => 'J7',
             'P22' => 'P22',
             'M14' => 'M14',
             
             
      ];
    }

    
    public function model(array $row)
    {
      $messages = [
        'C14.required' => 'We need to know the Date the repair was perfomed in row 14!',
        'D14.required' => 'We need to know the repair code in row 14!',
        'E14.required' => 'We need to know the Description of the Part worked on in row 14!',
        'F14.required' => 'We need to know the Part or Serial Number in row 14!',
        'G14.required' => 'We need to know the Quantity in row 14 !',
        'H14.required' => 'We need to know the Unit Price in row 14!',
    ];

     if( ($row['C14'] !=null) && ($row['D14'] == null) && ($row[ 'E14'] != null) && ($row['F14'] == null) && ($row['G14'] != null) && ($row['H14'] == null))
     {
       Validator::make($row, [
       'D14' => 'required',
       'F14' => 'required',
       'H14' => 'required',
       ],$messages)->validate();
      }

      if( ($row['C14'] !=null) && ($row['D14'] == null) && ($row[ 'E14'] == null) && ($row['F14'] == null) && ($row['G14'] != null) && ($row['H14'] != null))
     {
       Validator::make($row, [
       'D14' => 'required',
       'E14' => 'required',
       'F14' => 'required',
       ],$messages)->validate();
      }


      if( ($row['C14']!=null) && ($row['D14'] != null) && ($row[ 'E14'] == null) && ($row['F14'] != null) && ($row['G14'] != null) && ($row['H14'] != null))
                {
                  Validator::make($row, [
                   'E14' => 'required',
                  ],$messages)->validate();
                  }

                  if( ($row['C14']!=null) && ($row['D14'] != null) && ($row[ 'E14'] != null) && ($row['F14'] != null) && ($row['G14'] == null) && ($row['H14'] != null) )
                {
                  Validator::make($row, [
                   'G14' => 'required',
                  ],$messages)->validate();
                  }

                  if( ($row['C14']!=null) && ($row['D14'] != null) && ($row[ 'E14'] != null) && ($row['F14'] == null) && ($row['G14'] != null) && ($row['H14'] != null))
                  {
                    Validator::make($row, [
                     'F14' => 'required',
                    ],$messages)->validate();
                    }

      if( ($row['C14'] !=null) && ($row['D14'] == null) && ($row[ 'E14'] == null) && ($row['F14'] == null) && ($row['G14'] != null) && ($row['H14'] != null))
      {
        Validator::make($row, [
        'D14' => 'required',
        'E14' => 'required',
        'F14' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C14'] !=null) && ($row['D14'] == null) && ($row[ 'E14'] != null) && ($row['F14'] == null) && ($row['G14'] != null) && ($row['H14'] != null))
      {
        Validator::make($row, [
        'D14' => 'required',
        'F14' => 'required',
        ],$messages)->validate();
       }

      if( ($row['C14'] !=null) && ($row['D14'] == null) && ($row[ 'E14'] == null) && ($row['F14'] != null) && ($row['G14'] != null) && ($row['H14'] != null))
      {
        Validator::make($row, [
        'D14' => 'required',
        'E14' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C14'] !=null) && ($row['D14'] == null) && ($row[ 'E14'] != null) && ($row['F14'] != null) && ($row['G14'] != null) && ($row['H14'] != null))
       {
         Validator::make($row, [
         'D14' => 'required',
         ],$messages)->validate();
        }

       if( ($row['C14'] !=null) && ($row['D14'] == null) && ($row[ 'E14'] != null) && ($row['F14'] == null) && ($row['G14'] != null) && ($row['H14'] != null))
      {
        Validator::make($row, [
        'D14' => 'required',
        'F14' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C14'] !=null) && ($row['D14'] == null) && ($row[ 'E14'] == null) && ($row['F14'] != null) && ($row['G14'] == null) && ($row['H14'] != null))
       {
         Validator::make($row, [
         'D14' => 'required',
         'F14' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C14'] ==null) && ($row['D14'] == null) && ($row[ 'E14'] == null) && ($row['F14'] != null) && ($row['G14'] == null) && ($row['H14'] != null))
        {
          Validator::make($row,[
          'C14' => 'required', 
          'D14' => 'required',
          'E14' => 'required',
          'G14' => 'required',
          ],$messages)->validate();
         }

        if( ($row['C14'] !=null) && ($row['D14'] == null) && ($row[ 'E14'] == null) && ($row['F14'] != null) && ($row['G14'] != null) && ($row['H14'] != null))
        {
          Validator::make($row,[
          'D14' => 'required',
          'F14' => 'required',
          ],$messages)->validate();
         }
 

       if( ($row['C14'] !=null) && ($row['D14'] != null) && ($row[ 'E14'] == null) && ($row['F14'] == null) && ($row['G14'] != null) && ($row['H14'] != null))
       {
         Validator::make($row, [
         'E14' => 'required',
         'F14' => 'required',
         ],$messages)->validate();
        }


      if( ($row['C14'] !=null) && ($row['D14'] == null) && ($row[ 'E14'] == null) && ($row['F14'] == null) && ($row['G14'] != null) && ($row['H14'] == null))
      {
        Validator::make($row,[
        'D14' => 'required',
        'E14' => 'required',
        'F14' => 'required',
        'H14' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C14'] !=null) && ($row['D14'] != null) && ($row[ 'E14'] == null) && ($row['F14'] == null) && ($row['G14'] != null) && ($row['H14'] == null))
       {
         Validator::make($row,[
         'E14' => 'required',
         'F14' => 'required',
         'H14' => 'required',
         ],$messages)->validate();
        }

      if( ($row['C14'] !=null) && ($row['D14'] == null) && ($row[ 'E14'] == null) && ($row['F14'] == null) && ($row['G14'] == null) && ($row['H14'] == null))
     {
       Validator::make($row, [
       'D14' => 'required',
       'E14' => 'required',
       'F14' => 'required',
       'G14' => 'required',
       'H14' => 'required',
       ],$messages)->validate();
      }

      if( ($row['C14'] ==null) && ($row['D14'] != null) && ($row[ 'E14'] == null) && ($row['F14'] == null) && ($row['G14'] == null) && ($row['H14'] != null))
      {
        Validator::make($row,[
        'C14' => 'required',
        'E14' => 'required',
        'F14' => 'required',
        'G14' => 'required',
        ],$messages)->validate();
       }


       if( ($row['C14'] ==null) && ($row['D14'] != null) && ($row[ 'E14'] == null) && ($row['F14'] == null) && ($row['G14'] != null) && ($row['H14'] != null))
       {
         Validator::make($row,[
         'C14' => 'required',
         'E14' => 'required',
         'F14' => 'required',
         ],$messages)->validate();
        }
    
      if( ($row['C14'] == null) && ($row['D14'] != null) && ($row[ 'E14'] == null) && ($row['F14'] == null) && ($row['G14'] == null) && ($row['H14'] == null))
      {
        Validator::make($row,[
        'C14' => 'required',
        'E14' => 'required',
        'F14' => 'required',
        'G14' => 'required',
        'H14' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C14'] == null) && ($row['D14'] == null) && ($row[ 'E14'] != null) && ($row['F14'] == null) && ($row['G14'] == null) && ($row['H14'] == null))
      {
        Validator::make($row,[
        'C14' => 'required',
        'D14' => 'required',
        'F14' => 'required',
        'G14' => 'required',
        'H14' => 'required',
        ],$messages)->validate();
       }

       if( ($row['C14'] == null) && ($row['D14'] == null) && ($row[ 'E14'] == null) && ($row['F14'] != null) && ($row['G14'] == null) && ($row['H14'] == null))
       {
         Validator::make($row, [
         'C14' => 'required',
         'D14' => 'required',
         'E14' => 'required',
         'G14' => 'required',
         'H14' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C14'] == null) && ($row['D14'] == null) && ($row[ 'E14'] == null) && ($row['F14'] == null) && ($row['G14'] != null) && ($row['H14'] == null))
        {
          Validator::make($row, [
          'C14' => 'required',
          'D14' => 'required',
          'E14' => 'required',
          'F14' => 'required',
          'H14' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C14'] == null) && ($row['D14'] != null) && ($row[ 'E14'] == null) && ($row['F14'] == null) && ($row['G14'] != null) && ($row['H14'] == null))
         {
           Validator::make($row, [
           'C14' => 'required',
           'E14' => 'required',
           'F14' => 'required',
           'H14' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C14'] == null) && ($row['D14'] != null) && ($row[ 'E14'] == null) && ($row['F14'] == null) && ($row['G14'] != null) && ($row['H14'] == null))
         {
           Validator::make($row,[
           'C14' => 'required',
           'E14' => 'required',
           'F14' => 'required',
           'H14' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C14'] == null) && ($row['D14'] != null) && ($row[ 'E14'] == null) && ($row['F14'] != null) && ($row['G14'] != null) && ($row['H14'] == null))
          {
            Validator::make($row,[
            'C14' => 'required',
            'E14' => 'required',
            'H14' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C14'] == null) && ($row['D14'] != null) && ($row[ 'E14'] == null) && ($row['F14'] != null) && ($row['G14'] == null) && ($row['H14'] == null))
          {
            Validator::make($row,[
            'C14' => 'required',
            'E14' => 'required',
            'G14' => 'required',
            'H14' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C14'] == null) && ($row['D14'] != null) && ($row[ 'E14'] == null) && ($row['F14'] != null) && ($row['G14'] == null) && ($row['H14'] != null))
           {
             Validator::make($row, [
             'C14' => 'required',
             'E14' => 'required',
             'G14' => 'required',
             ],$messages)->validate();
            }

         if( ($row['C14'] != null) && ($row['D14'] == null) && ($row[ 'E14'] == null) && ($row['F14'] == null) && ($row['G14'] != null) && ($row['H14'] == null))
        {
          Validator::make($row,[
          'D14' => 'required',
          'E14' => 'required',
          'F14' => 'required',
          'H14' => 'required',
          ],$messages)->validate();
         }
         
         if( ($row['C14'] != null) && ($row['D14'] != null) && ($row[ 'E14'] == null) && ($row['F14'] != null) && ($row['G14'] == null) && ($row['H14'] != null))
         {
           Validator::make($row, [
           'E14' => 'required',
           'G14' => 'required',
           ],$messages)->validate();
          }

         if( ($row['C14'] != null) && ($row['D14'] != null) && ($row[ 'E14'] == null) && ($row['F14'] == null) && ($row['G14'] != null) && ($row['H14'] == null))
         {
           Validator::make($row, [
           'E14' => 'required',
           'F14' => 'required',
           'H14' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C14'] != null) && ($row['D14'] == null) && ($row[ 'E14'] == null) && ($row['F14'] != null) && ($row['G14'] == null) && ($row['H14'] == null))
          {
            Validator::make($row,[
              'D14' => 'required',
              'E14' => 'required',
              'G14' => 'required',
              'H14' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C14'] != null) && ($row['D14'] != null) && ($row[ 'E14'] == null) && ($row['F14'] != null) && ($row['G14'] == null) && ($row['H14'] == null))
           {
             Validator::make($row, [
               'E14' => 'required',
               'G14' => 'required',
               'H14' => 'required',
             ],$messages)->validate();
            }

          
          
          

         if( ($row['C14'] == null) && ($row['D14'] == null) && ($row[ 'E14'] == null) && ($row['F14'] == null) && ($row['G14'] == null) && ($row['H14'] != null))
         {
           Validator::make($row,[
           'C14' => 'required',
           'D14' => 'required',
           'E14' => 'required',
           'F14' => 'required',
           'G14' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C14'] == null) && ($row['D14'] == null) && ($row[ 'E14'] == null) && ($row['F14'] == null) && ($row['G14'] == null) && ($row['H14'] == null))
         {
           Validator::make($row, [
           'C14' => 'required',
           'D14' => 'required',
           'E14' => 'required',
           'F14' => 'required',
           'G14' => 'required',
           'H14' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C14'] != null) && ($row['D14'] == null) && ($row[ 'E14'] == null) && ($row['F14'] == null) && ($row['G14'] == null) && ($row['H14'] == null))
          {
            Validator::make($row,[
            'D14' => 'required',
            'E14' => 'required',
            'F14' => 'required',
            'G14' => 'required',
            'H14' => 'required',
            ],$messages)->validate();
           }

           if( ($row['C14'] != null) && ($row['D14'] == null) && ($row[ 'E14'] == null) && ($row['F14'] == null) && ($row['G14'] == null) && ($row['H14'] != null))
           {
             Validator::make($row,[
             'D14' => 'required',
             'E14' => 'required',
             'F14' => 'required',
             'G14' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C14'] != null) && ($row['D14'] != null) && ($row[ 'E14'] == null) && ($row['F14'] == null) && ($row['G14'] == null) && ($row['H14'] != null))
            {
              Validator::make($row, [
              'E14' => 'required',
              'F14' => 'required',
              'G14' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C14'] != null) && ($row['D14'] != null) && ($row[ 'E14'] != null) && ($row['F14'] == null) && ($row['G14'] == null) && ($row['H14'] != null))
            {
              Validator::make($row, [
              'F14' => 'required',
              'G14' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C14'] != null) && ($row['D14'] != null) && ($row[ 'E14'] != null) && ($row['F14'] != null) && ($row['G14'] == null) && ($row['H14'] != null))
             {
               Validator::make($row,[
               'G14' => 'required',
               ],$messages)->validate();
              }

            

           if( ($row['C14'] != null) && ($row['D14'] != null) && ($row[ 'E14'] == null) && ($row['F14'] == null) && ($row['G14'] == null) && ($row['H14'] == null))
          {
            Validator::make($row,[
            'E14' => 'required',
            'F14' => 'required',
            'G14' => 'required',
            'H14' => 'required',
            ],$messages)->validate();
           }

           
           if( ($row['C14'] == null) && ($row['D14'] != null) && ($row[ 'E14'] == null) && ($row['F14'] == null) && ($row['G14'] == null) && ($row['H14'] != null))
          {
            Validator::make($row, [
            'C14' => 'required', 
            'E14' => 'required',
            'F14' => 'required',
            'G14' => 'required',
            ],$messages)->validate();
           }

           
          


           if( ($row['C14'] == null) && ($row['D14'] == null) && ($row[ 'E14'] == null) && ($row['F14'] != null) && ($row['G14'] == null) && ($row['H14'] == null))
           {
             Validator::make($row,[
             'C14' => 'required', 
             'D14' => 'required',
             'E14' => 'required',
             'G14' => 'required',
             'H14' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C14'] == null) && ($row['D14'] == null) && ($row[ 'E14'] != null) && ($row['F14'] == null) && ($row['G14'] == null) && ($row['H14'] == null))
            {
              Validator::make($row, [
              'C14' => 'required', 
              'D14' => 'required',
              'F14' => 'required',
              'G14' => 'required',
              'H14' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C14'] == null) && ($row['D14'] == null) && ($row[ 'E14'] != null) && ($row['F14'] == null) && ($row['G14'] != null) && ($row['H14'] == null))
             {
               Validator::make($row,[
               'C14' => 'required', 
               'D14' => 'required',
               'F14' => 'required',
               'H14' => 'required',
               ],$messages)->validate();
              }

              if( ($row['C14'] == null) && ($row['D14'] != null) && ($row[ 'E14'] != null) && ($row['F14'] == null) && ($row['G14'] == null) && ($row['H14'] == null))
             {
               Validator::make($row,[
               'C14' => 'required', 
               'F14' => 'required',
               'G14' => 'required',
               'H14' => 'required',
               ],$messages)->validate();
              }

             if( ($row['C14'] == null) && ($row['D14'] != null) && ($row[ 'E14'] == null) && ($row['F14'] != null) && ($row['G14'] == null) && ($row['H14'] == null))
            {
              Validator::make($row, [
              'C14' => 'required', 
              'G14' => 'required',
              'H14' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C14'] == null) && ($row['D14'] == null) && ($row[ 'E14'] != null) && ($row['F14'] == null) && ($row['G14'] == null) && ($row['H14'] != null))
             {
               Validator::make($row,[
               'C14' => 'required', 
               'D14' => 'required',
               'F14' => 'required',
               'G14' => 'required',
               ],$messages)->validate();
              }
 
             if( ($row['C14'] == null) && ($row['D14'] != null) && ($row[ 'E14'] == null) && ($row['F14'] == null) && ($row['G14'] == null) && ($row['H14'] == null))
            {
              Validator::make($row,[
              'C14' => 'required', 
              'E14' => 'required',
              'F14' => 'required',
              'G14' => 'required',
              'H14' => 'required',
              ],$messages)->validate();
             }

           if( ($row['C14'] != null) && ($row['D14'] != null) && ($row[ 'E14'] != null) && ($row['F14'] == null) && ($row['G14'] == null) && ($row['H14'] == null))
           {
             Validator::make($row, [
             'F14' => 'required',
             'G14' => 'required',
             'H14' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C14'] != null) && ($row['D14'] != null) && ($row[ 'E14'] != null) && ($row['F14'] != null) && ($row['G14'] == null) && ($row['H14'] == null))
           {
             Validator::make($row,[
             'G14' => 'required',
             'H14' => 'required',
             ],$messages)->validate();
            }

            if( ($row['C14'] != null) && ($row['D14'] != null) && ($row[ 'E14'] != null) && ($row['F14'] != null) && ($row['G14'] != null) && ($row['H14'] == null))
            {
              Validator::make($row, [
              'H14' => 'required',
              ],$messages)->validate();
             }

             if( ($row['C14'] == null) && ($row['D14'] == null) && ($row[ 'E14'] == null) && ($row['F14'] == null) && ($row['G14'] != null) && ($row['H14'] == null))
            {
              Validator::make($row,[
              'C14' => 'required',
              'D14' => 'required',
              'E14' => 'required',
              'F14' => 'required',
              'H14' => 'required',
              ],$messages)->validate();
             }

          if( ($row['C14'] == null) && ($row['D14'] == null) && ($row[ 'E14'] == null) && ($row['F14'] == null) && ($row['G14'] == null) && ($row['H14'] != null))
         {
           Validator::make($row, [
           'C14' => 'required',
           'D14' => 'required',
           'E14' => 'required',
           'F14' => 'required',
           'G14' => 'required',
           ],$messages)->validate();
          }
         if( ($row['C14'] == null) && ($row['D14'] == null) && ($row[ 'E14'] == null) && ($row['F14'] == null) && ($row['G14'] != null) && ($row['H14'] != null))
        {
          Validator::make($row, [
          'C14' => 'required',
          'D14' => 'required',
          'E14' => 'required',
          'F14' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C14'] == null) && ($row['D14'] == null) && ($row[ 'E14'] == null) && ($row['F14'] == null) && ($row['G14'] != null) && ($row['H14'] != null))
         {
           Validator::make($row,[
           'C14' => 'required',
           'D14' => 'required',
           'E14' => 'required',
           'F14' => 'required',
           ],$messages)->validate();
          }
 

        if( ($row['C14'] == null) && ($row['D14'] == null) && ($row[ 'E14'] == null) && ($row['F14'] != null) && ($row['G14'] != null) && ($row['H14'] == null))
        {
          Validator::make($row, [
          'C14' => 'required',
          'D14' => 'required',
          'E14' => 'required',
          'H14' => 'required',
          ],$messages)->validate();
         }


         if( ($row['C14'] == null) && ($row['D14'] == null) && ($row[ 'E14'] == null) && ($row['F14'] != null) && ($row['G14'] != null) && ($row['H14'] != null))
        {
          Validator::make($row, [
          'C14' => 'required',
          'D14' => 'required',
          'E14' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C14'] == null) && ($row['D14'] == null) && ($row[ 'E14'] == null) && ($row['F14'] != null) && ($row['G14'] != null) && ($row['H14'] != null))
         {
           Validator::make($row, [
           'C14' => 'required',
           'D14' => 'required',
           'E14' => 'required',
           ],$messages)->validate();
          }

       if( ($row['C14'] == null) && ($row['D14'] == null) && ($row[ 'E14'] != null) && ($row['F14'] != null) && ($row['G14'] == null) && ($row['H14'] == null))
       {
         Validator::make($row, [
         'C14' => 'required',
         'G14' => 'required',
         'H14' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C14'] == null) && ($row['D14'] == null) && ($row[ 'E14'] != null) && ($row['F14'] != null) && ($row['G14'] != null) && ($row['H14'] == null))
       {
         Validator::make($row,[
         'C14' => 'required',
         'D14' => 'required',
         'H14' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C14'] == null) && ($row['D14'] == null) && ($row[ 'E14'] != null) && ($row['F14'] != null) && ($row['G14'] != null) && ($row['H14'] != null))
        {
          Validator::make($row, [
          'C14' => 'required',
          'D14' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C14'] == null) && ($row['D14'] == null) && ($row[ 'E14'] != null) && ($row['F14'] != null) && ($row['G14'] != null) && ($row['H14'] != null))
        {
          Validator::make($row,[
          'C14' => 'required',
          'D14' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C14'] == null) && ($row['D14'] == null) && ($row[ 'E14'] != null) && ($row['F14'] != null) && ($row['G14'] != null) && ($row['H14'] != null))
        {
          Validator::make($row, [
          'C14' => 'required',
          'D14' => 'required',
          ],$messages)->validate();
         }

       if( ($row['C14'] == null) && ($row['D14'] != null) && ($row[ 'E14'] != null) && ($row['F14'] == null) && ($row['G14'] == null) && ($row['H14'] == null))
       {
         Validator::make($row,[
         'C14' => 'required',
         'F14' => 'required',
         'G14' => 'required',
         'H14' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C14'] == null) && ($row['D14'] != null) && ($row[ 'E14'] != null) && ($row['F14'] != null) && ($row['G14'] == null) && ($row['H14'] == null))
       {
         Validator::make($row, [
         'C14' => 'required',
         'G14' => 'required',
         'H14' => 'required',
         ],$messages)->validate();
        }

        if( ($row['C14'] == null) && ($row['D14'] != null) && ($row[ 'E14'] != null) && ($row['F14'] != null) && ($row['G14'] != null) && ($row['H14'] == null))
        {
          Validator::make($row,[
          'C14' => 'required',
          'H14' => 'required',
          ],$messages)->validate();
         }

         if( ($row['C14'] == null) && ($row['D14'] != null) && ($row[ 'E14'] != null) && ($row['F14'] != null) && ($row['G14'] != null) && ($row['H14'] != null))
         {
           Validator::make($row, [
           'C14' => 'required',
           ],$messages)->validate();
          }

          if( ($row['C14'] == null) && ($row['D14'] != null) && ($row[ 'E14'] != null) && ($row['F14'] != null) && ($row['G14'] != null) && ($row['H14'] != null))
          {
            Validator::make($row,[
            'C14' => 'required',
            ],$messages)->validate();
           }
      
            if( ($row['C14']!=null) && ($row['D14'] != null) && ($row[ 'E14'] == null) && ($row['F14'] == null) && ($row['G14'] == null) && ($row['H14'] == null))
            {
              Validator::make($row, [
               'E14' => 'required',
                'F14' => 'required',
               'G14' => 'required',
               'H14' => 'required',
              ],$messages)->validate();
              }
        
              if( ($row['C14']!=null) && ($row['D14'] != null) && ($row[ 'E14'] != null) && ($row['F14'] == null) && ($row['G14'] == null) && ($row['H14'] == null))
              {
                Validator::make($row,[
                  'F14' => 'required',
                 'G14' => 'required',
                 'H14' => 'required',
                ],$messages)->validate();
                }

                if( ($row['C14']==null) && ($row['D14'] == null) && ($row[ 'E14'] == null) && ($row['F14'] != null) && ($row['G14'] == null) && ($row['H14'] == null))
              {
                Validator::make($row, [
                  'C14' => 'required',
                 'D14' => 'required',
                 'E14' => 'required',
                  'G14' => 'required',
                  'H14' => 'required',
                ],$messages)->validate();
                }


                if( ($row['C14']!=null) && ($row['D14'] != null) && ($row[ 'E14'] != null) && ($row['F14'] != null) && ($row['G14'] == null) && ($row['H14'] == null))
              {
                Validator::make($row,[
                 'G14' => 'required',
                 'H14' => 'required',
                ],$messages)->validate();
                }

                if( ($row['C14']!=null) && ($row['D14'] != null) && ($row[ 'E14'] != null) && ($row['F14'] != null) && ($row['G14'] != null) && ($row['H14'] == null))
                {
                  Validator::make($row, [
                   'H14' => 'required',
                  ],$messages)->validate();
                  }
            
                 
                  //$d2 = DateTime::createFromFormat('d-m-Y', $row['C14'])->format('Y-m-d')? "" : null;
                  // dd(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['C14'])? "" : null);

                   if($row['C14'] != null){
          return new PartWorkedOn([
             'job_date'  => DateTime::createFromFormat('d-m-Y', $row['C14'])->format('Y-m-d'),
              'repair_code' => $row['D14'],
              'description' =>  $row[ 'E14'],
              'part_no'  => $row['F14'],
              'quantity'  => $row['G14'],
              'unit_price' => $row['H14'],
              'job_cards' => $row[ 'J7'],
              'cost' => $row['P22'] * 1200,
              'outside_cost' => $row['M14'] + 0,
            ]);
           
           }
    }

 
}