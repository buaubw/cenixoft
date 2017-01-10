@extends('layouts.app0')

@section('content')

<div class="content-wrapper" style="height:1000px;">

<div class="container" style="padding-top:50px;">

<!-- <a href="{{ url('profile/create') }}" class="btn btn-block btn-warning">Create</a> -->

    <div class="col-xs-10 col-md-10">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Admin Customer</h3>
          <div class="box-body ">

            <div class="row" style="padding-top:10px;">
              <div class="col-md-2" style="text-align:right;">
                <label for="No" >No.</label>
                </div>
                  <div class="col-md-8">
                    <input class="form-control" type="text" id="no"  name="no" value="" placeholder="no.">
                  </div>
                    </div>
  <div class="row" style="padding-top:10px;">
                  <div class="col-md-2" style="text-align:right;">
                    <label for="username">User Name</label>
                    </div>
                  <div class="col-md-8">
                    <input class="form-control" type="text" id="username"  name="username" value="" placeholder="User Name">
                  </div>
                    </div>

                      <div class="row" style="padding-top:10px;">
                        <div class="col-md-2" style="text-align:right;">
                          <label for="name" >First Name</label>
                        </div>
                        <div class="col-md-8">
                          <input class="form-control" type="text" id="First name"  name="First name" value="" placeholder="First Name">
                        </div>
                          </div>
                          <div class="row" style="padding-top:10px;">
                        <div class="col-md-2" style="text-align:right;">
                          <label for="username">Create Password</label>
                        </div>
                        <div class="col-md-8">
                          <input class="form-control" type="text" id="create password"  name="create password" value="" placeholder="create password">
                        </div>
                        </div>
                          <div class="row" style="padding-top:10px;">
                            <div class="col-md-2" style="text-align:right;">
                              <label for="name" >Company Name</label>
                            </div>
                            <div class="col-md-8">
                              <input class="form-control" type="text" id="company name"  name="company name" value="" placeholder="company Name">
                            </div>
                              </div>
                              <div class="row" style="padding-top:10px;">
                            <div class="col-md-2" style="text-align:right;">
                              <label for="username">Confirm Password</label>
                            </div>
                            <div class="col-md-8">
                              <input class="form-control" type="text" id="confirm password"  name="confirm password" value="" placeholder="confirm password">
                            </div>
                              </div>
                              <div  style="text-align:center;padding-top:20px;" >
                                <a href="{{url('account/admin')}}" class="btn btn-primary">Back</a>
                              </div>
                          </div>








          </div>

        </div>
        <!-- /.box-header -->

        <!-- /.box-body -->
      </div>


</div>

</div>




@endsection
