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
        <form action="{{ url('/jobcard/show') }}" method="post" enctype="multipart/form-data">
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
                            id="input-name" type="date" placeholder="end_date" value="{{ old('end_date') }}"
                             />
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
                            id="input-name" type="text" placeholder="Fleet No" value="{{ old('fleet_no') }}"
                            aria-required="false" />
                        @if ($errors->has('fleet_no'))
                        <span id="name-error" class="error text-danger"
                            for="input-name">{{ $errors->first('fleet_no') }}</span>
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
                        <h4 class="card-title ">Job Card</h4>
                        <!-- <p class="card-category"> Here is a subtitle for this table</p>-->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th style="font-size: 20px">
                                        Fleet No
                                    </th>
                                    <th style="font-size: 20px">
                                        Date
                                    </th>

                                    <th style="font-size: 20px">
                                        Total Price Per Part
                                    </th>
                                    <th style="font-size: 20px">
                                        Total Man Power
                                    </th>
                                    <th style="font-size: 20px">
                                        Total Outside Repair
                                    </th>
                                    <th class="text-right">
                                        Total Repair Cost
                                    </th>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td style="font-size: 20px">
                                            No data to show
                                        </td>
                                        <td style="font-size: 20px">
                                            No data to show
                                        </td>
                                        <td style="font-size: 20px">
                                            No data to show
                                        </td>
                                        <td style="font-size: 20px">
                                            No data to show
                                        </td>
                                        <td style="font-size: 20px">
                                            No data to show
                                        </td>
                                        <td style="font-size: 20px">
                                            No data to show
                                        </td>
                                    </tr>



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