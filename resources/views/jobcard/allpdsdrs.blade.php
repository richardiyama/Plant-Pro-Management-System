@extends('layouts.app', ['activePage' => 'allpdsdrs', 'titlePage' => __('Calculate Fuel Consumption')])
@section('content')
<div class="content">
    <div class="container">

        @if(count($errors) > 0)
        <div class="alert alert-danger">
            Upload Validation Error<br><br>
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}} </li>
                @endforeach
            </ul>
        </div>
        @endif

        @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{$message}}</strong>
        </div>
        @endif
        <form action="{{ url('/CalculateFuelConsumption/fuelConsumption') }}" method="post"
            enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <label class="col-sm-2 col-form-label">Start Date</label>
                <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('start_date') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('start_date') ? ' is-invalid' : '' }}"
                            name="start_date" id="input-name" type="date" placeholder="start_date"
                            value="{{ old('start_date') }}" />
                        @if ($errors->has('start_date'))
                        <span id="name-error" class="error text-danger"
                            for="input-name">{{ $errors->first('start_date') }}</span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <label class="col-sm-2 col-form-label">End Date</label>
                <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('end_date') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('end_date') ? ' is-invalid' : '' }}" name="end_date"
                            id="input-name" type="date" placeholder="end_date" value="{{ old('end_date') }}" />
                        @if ($errors->has('end_date'))
                        <span id="name-error" class="error text-danger"
                            for="input-name">{{ $errors->first('end_date') }}</span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <label class="col-sm-2 col-form-label">Fleet No</label>
                <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('fleet_no') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('fleet_no') ? ' is-invalid' : '' }}" name="fleet_no"
                            id="input-name" type="text" placeholder="Fleet No" value="{{ old('fleet_no') }}" />
                        @if ($errors->has('fleet_no'))
                        <span id="name-error" class="error text-danger"
                            for="input-name">{{ $errors->first('fleet_no') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-2 col-form-label">Location</label>
                <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('location') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location"
                            id="input-name" type="text" placeholder="Location" value="{{ old('location') }}" />
                        @if ($errors->has('location'))
                        <span id="name-error" class="error text-danger"
                            for="input-name">{{ $errors->first('location') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="card-footer ml-auto mr-auto">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>

            </div>



        </form>




        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Fuel Consumption</h4>
                        <!-- <p class="card-category"> Here is a subtitle for this table</p>-->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" style="width:100%">
                            
                                      
                                <thead class=" text-primary">
 
                                    <th style="font-size: 20px" >
                                        Fleet No
                                    </th>
                                    <th style="font-size: 20px" >
                                        Model
                                    </th>
                                    <th style="font-size: 20px">
                                        Hour-Meter Reading(First Day)
                                    </th>
                                    <th style="font-size: 20px">
                                        Hour-Meter Reading(Last Day)
                                    </th>
                                    <th style="font-size: 20px" >
                                        Total Quantity Of Diesel a Month
                                    </th>
                                    <th style="font-size: 20px">
                                        Avergage Fuel Consumption
                                    </th>
                                     <th style="font-size: 20px">
                                        Theoretical Avergage Fuel Consumption
                                    </th>
                                    <th style="font-size: 20px">
                                        Location
                                    </th>

<caption style="font-size: 20px;display: table-caption;text-align: center"><?php echo "FUEL CONSUMPTION REPORT (FROM: $start TO: $end)" ?> </caption>
                                </thead>

                                <tbody>

                                    @foreach($allpdsdr as $fuel)
                                 
                                    
                                      
                                   
                                    <tr>

                                    
                                        <td style="font-size: 20px">
                                        <?php
                                         $first =  DB::table('pdsdrs')->whereBetween('pdsdrs.date_entry', [$start, $end])->where('pdsdrs.location',$location)->where('pdsdrs.fleet_no','=', $fuel->fleet_no)->orderby('pdsdrs.date_entry')->first();

                                         
                                         if($first)
                                         {
                                        echo $first->fleet_no;
                                         }
                                         
                                        ?>
                                     
                                        </td>
                                    <td style="font-size: 20px">
                                    <?php
                                     $first =  DB::table('pdsdrs')->whereBetween('pdsdrs.date_entry', [$start, $end])->where('pdsdrs.location',$location)->where('pdsdrs.fleet_no','=', $fuel->fleet_no)->orderby('pdsdrs.date_entry')->first();
               if($first)
               {
       $check = DB::table('equipmentmasterlist')->where('equipmentmasterlist.fleet_no','=', $first->fleet_no)->orderby('equipmentmasterlist.fleet_no')->first();
       if($check)
       {
         echo  $check->model;
       }
               }
                                    ?>
                                      
                                        </td>
                                        <td style="font-size: 20px">

                                            <?php
                                           
                                           $first =  DB::table('pdsdrs')->whereBetween('pdsdrs.date_entry', [$start, $end])->where('pdsdrs.location',$location)->where('pdsdrs.fleet_no','=', $fuel->fleet_no)->orderby('pdsdrs.date_entry')->first();
                                         if($first)
                                         {
                                        echo $first->hour_meter_reading;
                                         }
                                         
                                         ?>
                                        </td>
                                        <td style="font-size: 20px">

                                            <?php
                                            $second =   DB::table('pdsdrs')->whereBetween('pdsdrs.date_entry', [$start, $end])->where('pdsdrs.location',$location)->where('pdsdrs.fleet_no','=', $fuel->fleet_no)->orderby('pdsdrs.date_entry','DESC')->first();
                                           if($second)
                                         {
                                        echo $second->hour_meter_reading;
                                         }
                                          
                                         ?>
                                        </td>


                                        <td style="font-size: 20px" >
                                        <?php
                                        
                                        $pdsdr =  DB::table('pdsdrs')->whereBetween('pdsdrs.date_entry', [$start, $end])->where('pdsdrs.location',$location)->where('pdsdrs.fleet_no','=', $fuel->fleet_no)->sum('fuel_quantity');
                                       if($pdsdr)
                                       {
                                   
  

                                           //dd($pdsdr);
                                        echo $pdsdr ;
                                       }
                                       

?>                                      
                                        </td>
                                        <td style="font-size: 20px">
                                        <?php
  
                                       
                                   $firstnull =  DB::table('pdsdrs')->whereBetween('pdsdrs.date_entry', [$start, $end])->where('pdsdrs.location',$location)->where('pdsdrs.fleet_no','=', $fuel->fleet_no)->orderby('pdsdrs.date_entry')->first();
                                          
                                         
                                             

                                            $secondnull = DB::table('pdsdrs')->whereBetween('pdsdrs.date_entry', [$start, $end])->where('pdsdrs.location',$location)->where('pdsdrs.fleet_no','=', $fuel->fleet_no)->orderby('pdsdrs.date_entry','DESC')->first();
                                          
                                         
                                            


$pdsdr =  DB::table('pdsdrs')->whereBetween('pdsdrs.date_entry', [$start, $end])->where('pdsdrs.location',$location)->where('pdsdrs.fleet_no','=', $fuel->fleet_no)->sum('fuel_quantity');
//dd($pdsdr);
//dd((int)($second->hour_meter_reading));

        if($firstnull && $secondnull && $pdsdr)
    {

$result = ((int)($secondnull->hour_meter_reading)) - ((int)($firstnull->hour_meter_reading));
  
       
   
    if($result > 0){
        
      echo  $fuelConsumption = ((int)$pdsdr) / $result;  
   
    }
     

                    
}         
    
                        
   


                    
         
   
   //if((int)($second->hour_meter_reading) > 0)
   //{
         
      ///echo  $fuelConsumption = ((int)$pdsdr) / ((int)($second->hour_meter_reading));  
  // }

   
   
    

   
   

   
    

     
 

                                           


   ?>
   </td>
   <td style="font-size: 20px; text-align:center">
   <?php
     
                                         
        $hourlyconsumption = DB::table('consumptions')->get();
        $first =  DB::table('pdsdrs')->whereBetween('pdsdrs.date_entry', [$start, $end])->where('pdsdrs.location',$location)->where('pdsdrs.fleet_no','=', $fuel->fleet_no)->orderby('pdsdrs.date_entry')->first();
               if($first && $hourlyconsumption)
               {
       $check = DB::table('equipmentmasterlist')->where('equipmentmasterlist.fleet_no','=', $first->fleet_no)->orderby('equipmentmasterlist.fleet_no')->first();
            foreach($hourlyconsumption as $vals)
            {
               
                if($check && $vals->model == $check->model)
                {
           echo $vals->hourly_average_consumption;
                }
                 
               
            }
               }
             
   ?>
   
   </td>

                                        

                   <td style="font-size: 20px">
                   <?php
                    $first =  DB::table('pdsdrs')->whereBetween('pdsdrs.date_entry', [$start, $end])->where('pdsdrs.location',$location)->where('pdsdrs.fleet_no','=', $fuel->fleet_no)->orderby('pdsdrs.date_entry')->first();
               if($first)
               {
                  echo $first->location;
               }
               
                   ?>
                   
                  </td>


                                    </tr>
                                    
                                    @endforeach
                       
                                </tbody>


                            </table>
                          
                        </div>

                    
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
</div>
</div>
@endsection