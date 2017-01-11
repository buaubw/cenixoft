@extends('layouts.app0')

@section('content')

<div class="content-wrapper" style="height:1000px;">

<div class="container" style="padding-top:50px;">

<!-- <a href="{{ url('profile/create') }}" class="btn btn-block btn-warning">Create</a> -->

    <div class="col-xs-10 col-md-10">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Information Customer</h3>
          <div class="box-body ">

            <div class="row" style="padding-top:10px;">
              <div class="col-md-2" style="text-align:right;">
                <label for="No" >No.</label>
                </div>
                  <div class="col-md-8">
                    <input class="form-control" type="text" id="no"  name="no" value="" placeholder="No.">
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
                    <label for="username">Password</label>
                    </div>
                    <div class="col-md-8">
                    <input class="form-control" type="text" id="password"  name="password" value="" placeholder="Password">
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
                          <label for="username">Last Name</label>
                          </div>
                          <div class="col-md-8">
                          <input class="form-control" type="text" id="lastname"  name="lastname" value="" placeholder="Last Name">
                          </div>
                          </div>
                          <div class="row" style="padding-top:10px;">
                            <div class="col-md-2" style="text-align:right;">
                              <label for="name" >Company Name</label>
                            </div>
                            <div class="col-md-8">
                              <input class="form-control" type="text" id="company name"  name="company name" value="" placeholder="Company Name">
                            </div>
                              </div>
                              <div class="row" style="padding-top:10px;">
                            <div class="col-md-2" style="text-align:right;">
                              <label for="username">Address</label>
                            </div>
                            <div class="col-md-8">
                              <input class="form-control" type="text" id="address"  name="address" value="" placeholder="Address">
                            </div>
                              </div>
                              <div class="row" style="padding-top:10px;">
                          <div class="col-md-2" style="text-align:right;">
                            <label for="username">E-Mail</label>
                            </div>
                          <div class="col-md-8">
                            <input class="form-control" type="text" id="e-mail"  name="e-mail" value="" placeholder="E-Mail">
                          </div>
                            </div>
                            <div class="row" style="padding-top:10px;">
                        <div class="col-md-2" style="text-align:right;">
                          <label for="username">Tel</label>
                          </div>
                        <div class="col-md-8">
                          <input class="form-control" type="text" id="tel"  name="tel" value="" placeholder="Tel">
                        </div>
                          </div>
                          <div class="row" style="padding-top:10px;">
                          <div class="col-md-2" style="text-align:right;">
                          <label for="username">Fax</label>
                          </div>
                          <div class="col-md-8">
                          <input class="form-control" type="text" id="fax"  name="fax" value="" placeholder="Fax">
                          </div>
                          </div>
                          <div class="row" style="padding-top:10px;">
                          <div class="col-md-2" style="text-align:right;">
                          <label for="username">No.Tex</label>
                          </div>
                          <div class="col-md-8">
                          <input class="form-control" type="text" id="no.tex"  name="no.tex" value="" placeholder="No.Tex">
                          </div>
                          </div>
                          <div class="row" style="padding-top:10px;">
                            <div class="col-md-2" style="text-align:right;">
                              <label for="username">By</label>
                            </div>
                            <div class="col-md-8">
                              <input class="form-control" type="text" id="by"  name="by" value="" placeholder="By">
                            </div>
                          </div>
                          <div class="row" style="padding-top:10px;">
                          <div class="col-md-2" style="text-align:right;">
                          <label for="username">Date Time</label>
                          </div>
                          <div class="col-md-8">
                          <input class="form-control" type="text" id="date time"  name="date time" value="" placeholder="Date Time">
                          </div>
                          </div>



                              <div  style="text-align:center;padding-top:20px;" >
                                <a href="{{url('account/customer')}}" class="btn btn-primary">Back</a>
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
