@extends('layouts.app0')

@section('content')

<div class="content-wrapper" style="height:800px;">
<div class="container" style="padding-top:20px;">
  <div class="col-xs-10 col-md-10">
  <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Project</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form action="{{ action('ProjectController@store') }}" method="POST">
                  {{ csrf_field() }}
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="customer_id">Customer name</label>
                    <select class="form-control" id="customer_id" name="customer_id">
                      @foreach($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->companyname}}</option>
                        @endforeach
                    </select>
                  </div>


                  <div class="form-group">
                    <label for="exampleInputPassword1">type</label>
                    <select  name="type" class="form-control">
                      <option value="Website">Website</option>
                      <option value="Mobile">Mobile</option>
                      <option value="Logo">Logo</option>
                    </select>
                  </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
</div>

</div>
</div>










@endsection
