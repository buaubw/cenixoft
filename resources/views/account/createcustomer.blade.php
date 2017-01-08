@extends('layouts.app0')

@section('content')

<div class="content-wrapper" style="height:1000px;">



<div class="container" style="padding-top:50px;">
  <div class="col-md-2">
<!-- <a href="{{ url('profile/create') }}" class="btn btn-block btn-warning">Create</a> -->
<div class="container" style="padding-top:50px;">
  <div class="col-md-8">


</div>
  <div class="row" style="padding-top:50px;">
    <div class="col-xs-11 col-md-11">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Customer Managment</h3>


        </div>
        <!-- /.box-header -->
        <div class="box-body ">

          <div class="row">
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
          <div class="row">
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
          <div class="row">
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
          <div class="box-footer">
              <button type="submit" class="btn btn-primary">Cancel</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>







        </div>
        <!-- /.box-body -->
      </div>


</div>

</div>
</div>
</div>



@endsection
