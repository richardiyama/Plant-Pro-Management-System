@extends('layouts.app', ['activePage' => 'pdsdr', 'titlePage' => __('Plant-Daily Site Data Report')])

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
        <form action="{{ url('/pdsdr/uploadPdsdr') }}" method="post" enctype="multipart/form-data">
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
                        <h4 class="card-title ">Plant-Daily Site Data Report</h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">

                                    <th style="font-size: 20px">
                                        Fleet No
                                    </th>
                                    <th style="font-size: 20px">
                                        Idle
                                    </th>
                                    <th style="font-size: 20px">
                                        Available
                                    </th>
                                    <th style="font-size: 20px">
                                        Breakdown
                                    </th>
                                    <th style="font-size: 20px">
                                        Availability Status
                                    </th>
                                    <th style="font-size: 20px">
                                        Fuel Quantity(Ltrs)
                                    </th>
                                    <th style="font-size: 20px">
                                        Fuel Type
                                    </th>
                                    <th style="font-size: 20px">
                                        E.O(Ltr)
                                    </th>
                                    <th style="font-size: 20px">
                                        T.O(Ltr)
                                    </th>
                                    <th style="font-size: 20px">
                                        H.O(Ltr)
                                    </th>
                                    <th style="font-size: 20px">
                                        Other Oil(Ltr)
                                    </th>
                                    <th style="font-size: 20px">
                                        Filters Issued(If Any)
                                    </th>
                                    <th style="font-size: 20px">
                                        Hour Meter Reading
                                    </th>
                                    <th style="font-size: 20px">
                                        Unit
                                    </th>
                                    <th style="font-size: 20px">
                                        Remarks
                                    </th>
                                    <th style="font-size: 20px">
                                        Date
                                    </th>
                                    <th style="font-size: 20px">
                                        Location
                                    </th>


                                </thead>
                                <tbody>
                                    @foreach($pdsdr as $part)
                                    <tr>


                                        <td style="font-size: 20px">
                                            {{ $part->fleet_no }}

                                        <td style="font-size: 20px">
                                            {{ $part->idle }}
                                        </td>

                                        <td style="font-size: 20px">
                                            {{ $part->available }}
                                        </td>


                                        <td style="font-size: 20px">
                                            {{ $part->breakdown}}
                                        </td>
                                        <td style="font-size: 20px">
                                            {{ $part->availability_status }}
                                        </td>
                                        <td style="font-size: 20px">
                                            {{$part->fuel_quantity}}
                                        </td>
                                        <td style="font-size: 20px">
                                            {{$part->fuel_type}}
                                        </td>
                                        <td style="font-size: 20px">
                                            {{$part->e_o}}
                                        </td>
                                        <td style="font-size: 20px">
                                            {{$part->t_o}}
                                        </td>
                                        <td style="font-size: 20px">
                                            {{$part->h_o}}
                                        </td>
                                        <td style="font-size: 20px">
                                            {{$part->other_oil}}
                                        </td>
                                        <td style="font-size: 20px">
                                            {{$part->filters_issued}}
                                        </td>
                                        <td style="font-size: 20px">
                                            {{$part->hour_meter_reading}}
                                        </td>
                                        <td style="font-size: 20px">
                                            {{$part->unit}}
                                        </td>
                                        <td style="font-size: 20px">
                                            {{$part->remarks}}
                                        </td>
                                        <td style="font-size: 20px">
                                           {{ $part->date_entry }}
                                        </td>
                                        <td style="font-size: 20px">
                                           {{ $part->location }}
                                            
       
                                        </td>
                                        <td class="td-actions text-right">

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {!! $pdsdr->render() !!}
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
</div>
@endsection