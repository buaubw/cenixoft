@extends('layouts.app0')

@section('content')

<div class="content-wrapper" style="height:1000px;">

<div class="container" style="padding-top:20px;">
  <h3 class="box-title">Customer Managment</h3>
  <form action="{{ action('CustomerController@store') }}" method="POST">
      {{ csrf_field() }}
  <div class="row" style="padding-top:10px;">
    <div class="col-xs-10 col-md-10">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Create Customer Account</h3>


        </div>
        <!-- /.box-header -->
        <div class="box-body ">

            <div class="row" style="padding-top:10px;">
            <div class="col-md-2" style="text-align:right;">
              <label for="firstname" >First Name</label>
            </div>
            <div class="col-md-4">
              <input class="form-control" type="text" id="firstname"  name="firstname" value="" placeholder="First Name" required>
            </div>
            <div class="col-md-2" style="text-align:right;">
              <label for="username">Create User Name</label>
            </div>
            <div class="col-md-4">
              <input class="form-control" type="text" id="username"  name="username" value="" placeholder="User Name" required>
            </div>

          </div>
          <div class="row" style="padding-top:10px;">
            <div class="col-md-2" style="text-align:right;">
              <label for="name" >Last Name</label>
            </div>
            <div class="col-md-4">
              <input class="form-control" type="text" id="lastname"  name="lastname" value="" placeholder="Last Name" required>
            </div>
            <div class="col-md-2" style="text-align:right;">
              <label for="username">Create Password</label>
            </div>
            <div class="col-md-4">
              <input class="form-control" type="password" id="password"  name="password" value="" placeholder="create password" required>
            </div>


          </div>
            <div class="row" style="padding-top:10px;">
              <div class="col-md-2" style="text-align:right;">
                <label for="name" >Company Name</label>
              </div>
              <div class="col-md-4">
                <input class="form-control" type="text" id="companyname"  name="companyname" value="" placeholder="company Name" required>
              </div>
              <div class="col-md-2" style="text-align:right;">
                <label for="username">Confirm Password</label>
              </div>
              <div class="col-md-4">
                <input class="form-control" type="password" id="confirmpassword"  name="confirmpassword" value="" placeholder="confirm password" required>
              </div>



            </div>
            <div class="row" style="padding-top:10px;">
              <div class="col-md-2" style="text-align:right;">
                <label for="name" >About work</label>
              </div>
              <div class="col-md-4">
                <input class="form-control" type="text" id="about work"  name="about work" value="" placeholder="about work" required>
              </div>


          </div>


          <div  style="text-align:center;padding-top:20px;" >
              <a href="{{url('customer')}}" class="btn btn-primary">Cancel</a>
            <button type="submit" class="btn btn-success">Save</button>
          </div>






</div>
        </div>
        <!-- /.box-body -->
      </div>


</div>
</form>
</div>
</div>



@endsection
