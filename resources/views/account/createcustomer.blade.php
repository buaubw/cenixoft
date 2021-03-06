@extends('layouts.app0')

@section('content')

<div class="content-wrapper" style="height:1000px;">

<div class="container" style="padding-top:20px;">
  <h3 class="box-title">Customer Managment</h3>

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
              <input class="form-control" type="text" id="firstname"  name="firstname" value="" placeholder="First Name">
            </div>
            <div class="col-md-2" style="text-align:right;">
              <label for="username">Create User Name</label>
            </div>
            <div class="col-md-4">
              <input class="form-control" type="text" id="username"  name="username" value="" placeholder="User Name">
            </div>

          </div>
            <div class="row" style="padding-top:10px;">
            <div class="col-md-2" style="text-align:right;">
              <label for="name" >Last Name</label>
            </div>
            <div class="col-md-4">
              <input class="form-control" type="text" id="last name"  name="last name" value="" placeholder="Last Name">
            </div>
            <div class="col-md-2" style="text-align:right;">
              <label for="username">Create Password</label>
            </div>
            <div class="col-md-4">
              <input class="form-control" type="text" id="create password"  name="create password" value="" placeholder="create password">
            </div>

          </div>
          <div class="row" style="padding-top:10px;">
            <div class="col-md-2" style="text-align:right;">
              <label for="name" >Company Name</label>
            </div>
            <div class="col-md-4">
              <input class="form-control" type="text" id="company name"  name="company name" value="" placeholder="company Name">
            </div>
            <div class="col-md-2" style="text-align:right;">
              <label for="username">Confirm Password</label>
            </div>
            <div class="col-md-4">
              <input class="form-control" type="text" id="confirm password"  name="confirm password" value="" placeholder="confirm password">
            </div>

          </div>
          <div class="row" style="padding-top:10px;">
            <div class="col-md-2" style="text-align:right;">
              <label for="name" >About work</label>
            </div>
            <div class="col-md-4">
              <input class="form-control" type="text" id="about work"  name="about work" value="" placeholder="about work">
            </div>
          

          </div>

          <div  style="text-align:center;padding-top:20px;" >
              <button type="submit" class="btn btn-primary">Cancel</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>






</div>
        </div>
        <!-- /.box-body -->
      </div>


</div>

</div>
</div>



@endsection
