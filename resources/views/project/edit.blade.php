@extends('layouts.app00')

@section('content')

<div class="content-wrapper" style="height:1000px;">

  <div class="container" style="padding-top:50px;">

    <!-- <a href="{{ url('profile/create') }}" class="btn btn-block btn-warning">Create</a> -->
    <div class="container" style="padding-top:20px;">
      <div class="col-xs-10 col-md-10">

      </div>

      <div class="col-xs-10 col-md-10">
        <form method="POST" action = "{{url('/')}}/project/<?php echo $value->id; ?>">
          <!-- <input type = "hidden" name = "_token" value = "<?php //echo csrf_token(); ?>"> -->
            {{ csrf_field() }}
            {{ method_field('PUT') }}
          <input type="hidden" name="id" value="{{$value->id}}" />
          <input type="hidden" name="by" value="{{$value->by}}" />
          <input type="hidden" name="date" value="{{$value->date}}" />
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit Project</h3>
              <div class="box-body ">
                <div class="form-group">
                  <div class="row" style="padding-top:10px;">
                    <div class="col-md-2" style="text-align:right;">
                      <label for="name" >Name</label>
                    </div>
                    <div class="col-md-6">
                      <input class="form-control" type="text" id="name"  name="name" value="{{ $value->name }}" placeholder="Name">
                    </div>

                  </div>
                  <div class="row" style="padding-top:10px;">
                    <div class="col-md-2" style="text-align:right;">
                      <label for="type" >Type</label>
                    </div>
                    <div class="col-md-6">
                      <select  name="type" class="form-control" value="{{ $value->type }}">
                        <option value="Website" <?php if($value->type=="Website"){echo "selected";} ?>>Website</option>
                        <option value="Mobile"  <?php if($value->type=="Mobile"){echo "selected";} ?>>Mobile</option>
                        <option value="Logo" <?php if($value->type=="Logo"){echo "selected";} ?>>Logo</option>
                      </select>
                    </div>

                  </div>
                  <div class="row" style="padding-top:10px;">
                    <div class="col-md-2" style="text-align:right;">
                      <label for="name" >Customer</label>
                    </div>
                    <div class="col-md-6">

                      <select class="form-control" id="customer_id" name="customer_id" value="{{ $value->customer_id }}">
                        @foreach($customers as $customer)
                          <option value="{{ $customer->id }}" <?php if($value->customer_id==$customer->id){echo "selected";} ?>>{{ $customer->companyname}}</option>
                          @endforeach
                      </select>
                    </div>

                  </div>
                  <div  style="text-align:center;padding-top:20px;" >
                    <a href= {{url('project')}} class="btn btn-danger">Cancel</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>







                </div>

              </div>
              <!-- /.box-header -->

              <!-- /.box-body -->
            </div>


          </div>
        </form>
      </div>
    </div>
  </div>



  @endsection
