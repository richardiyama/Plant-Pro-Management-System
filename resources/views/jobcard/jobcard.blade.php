@extends('layouts.app', ['activePage' => 'jobcard', 'titlePage' => __('Job Card')])

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
        <form action="{{ url('/jobcard/store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">

                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="select_file" id="select_file">
                        <label class="custom-file-label" style="border: 2px solid red; border-radius: 4px"
                            for="select_file">Choose file</label>
                    </div>

                </div>
            </div>
            <div class="form-group">
                <div class="input-group-append">
                    <input type="submit" name="upload" class="btn btn-primary text-center" value="upload">
                </div>

            </div>



        </form>


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Job Card</h4>
                        <!-- <p class="card-category"> Here is a subtitle for this table</p>-->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table">
                                <thead class=" text-primary">

                                    <th style="font-size: 20px">
                                        Fleet No
                                    </th>
                                    <th style="font-size: 20px">
                                        Date
                                    </th>
                                    <th style="font-size: 20px">
                                        Type Code
                                    </th>
                                    <th style="font-size: 20px" >
                                        Repair Code
                                    </th>
                                    <th style="font-size: 20px">
                                        Description
                                    </th>
                                    <th style="font-size: 20px">
                                        Part Number
                                    </th>
                                    <th>
                                        Quantity
                                    </th>
                                    <th style="font-size: 20px">
                                        Unit Price
                                    </th>
                                    <th>
                                        Total Price Per Part
                                    </th>
                                    <th style="font-size: 20px">
                                        Total Man Power
                                    </th>
                                    <th style="font-size: 20px" >
                                        Total Outside Repair
                                    </th>
                                    <th class="text-right">
                                        Total Repair Cost
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach($parts as $part)

                                    <tr>


                                        <td style="font-size: 20px">
                                            {{ $part->job_cards }}
                                        </td>
                                        <td style="font-size: 20px">
                                            <?php
if(($part->date_of_repair == "1970-01-01") && ($part->job_date == "1970-01-01"))
{
    echo "";
}

                 elseif($part->job_date == "1970-01-01")
                    {
                    echo $part->date_of_repair;
                    }
                         elseif($part->date_of_repair == "1970-01-01")
                            {
                                echo $part->job_date;
                            }
                           
                            
                            ?>

                                        </td>
                                        <td style="font-size: 20px">
                                            <?php 
                        $the_type_code = DB::table('equipmentmasterlist')->where('fleet_no',$part->job_cards)->first();
                        if($the_type_code != null)
                        {
                        echo (int)$the_type_code->type_code;
                        }
                        ?>
                                        </td>

                                        <td style="font-size: 20px">
                                            <?php
                            if($part->repair_code > 99){
                               echo $part->repair_code; 
                            }

                            if(($part->repair_code > 9) && ($part->repair_code < 99)){
                                echo "0" .$part->repair_code; 
                             }
                                
                             if($part->repair_code < 10){
                                echo "00" .$part->repair_code;
                             }
                             ?>
                                        </td>


                                        <td style="font-size: 20px">
                                            <?php

if($part->repairs_brief_description == null)
   {
   echo $part->description;
   }
        elseif($part->description == null)
           {
               echo $part->repairs_brief_description;
           }
          
         
           
           ?>
                                            {{ $part->repairs_brief_description}}
                                        </td>
                                        <td style="font-size: 20px">
                                            {{ $part->part_no}}
                                        </td>
                                        <td style="font-size: 20px">
                                            {{ $part->quantity}}
                                        </td>
                                        <td style="font-size: 20px">
                                            {{ $part->unit_price }}
                                        </td>
                                        <td style="font-size: 20px">
                                            <?php
                            echo $part->unit_price * $part->quantity;
                            ?>
                                        </td>
                                        <td style="font-size: 20px">
                                            {{ $part->cost }}
                                        </td>
                                        <td style="font-size: 20px">
                                            <?php

if($part->amount == null)
   {
   echo $part->outside_cost;
   }
        elseif($part->amount != null)
           {
               echo $part->amount;
           }
          
         
           
           ?>

                                        </td>
                                        <td style="font-size: 20px" class="td-actions text-right">
                                            <?php
                            if(($part->cost == 0) && ($part->outside_cost == 0) && (($part->unit_price * $part->quantity)  == 0) )
                            {
                                echo $part->amount ;
                            }
                            else{
                            echo  $part->cost + $part->outside_cost + ($part->unit_price * $part->quantity) ;}
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
@endsection