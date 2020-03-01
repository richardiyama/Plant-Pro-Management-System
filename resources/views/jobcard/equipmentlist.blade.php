@extends('layouts.app', ['activePage' => 'equipmentlist', 'titlePage' => __('Equipment Master List')])

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
        <form action="{{ url('/equipmentMasterList/uploadEquipmentMasterList') }}" method="post" enctype="multipart/form-data">
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
            <h4 class="card-title ">Equipment Master List</h4>
           <!-- <p class="card-category"> Here is a subtitle for this table</p>-->
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                
                <th>
                            Fleet No
                        </th>
                        <th>
                        Type Code
                        </th>
                        <th>
                            Make
                        </th>
                        <th>
                            Model
                        </th>
                        <th>
                            Machine Serial Number
                        </th>
                        <th>
                            Engine Serial Number
                        </th>
                        <th>
                            Engine Make
                        </th>
                        <th>
                            Engine Model
                        </th>
                        <th>
                        Power Rating in hp/kw
                        </th>
                        <th>
                        Ownership
                        </th>
                        <th>
                        mfg year
                        </th>
                        <th>
                        Commissoning Date
                        </th>
                        <th class="text-right">
                        Invoice
                        </th>
                    </thead>
                    <tbody>
                        @foreach($equipment as $part)
                        <tr>
                        
                            
                            <td>
                                {{ $part->fleet_no }}
                          
                            <td>
                            {{ $part->type_code }}
                            </td>
                           
                            <td>
                            {{ $part->make }}
                            </td>
                        
                            
                            <td>
                                {{ $part->model}}
                            </td>
                            <td>
                                {{ $part->machine_serial_no }}
                            </td>
                            <td>
                                {{$part->engine_serial_no}}
                            </td>
                            <td>
                                {{$part->engine_make}}
                            </td>
                            <td>
                            {{$part->engine_model}}
                            </td>
                            <td>
                                {{$part->power_rating_hp_kw}}
                            </td>
                            <td>
                                {{$part->ownership}}
                            </td>
                            <td>
                                {{$part->mfg_year}}
                            </td>
                            <td>
                                {{$part->comm_date}}
                            </td>
                            <td>
                                {{$part->invoice}}
                            </td>
                            <td class="td-actions text-right">

                            </td>
                        </tr>
                        @endforeach
                </tbody>
              </table>
            </div>
            {!! $equipment->render() !!}
          </div>
        </div>
      </div>
      
           
      </div>
    </div>
    </div>
</div>
@endsection