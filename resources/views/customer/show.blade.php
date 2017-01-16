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
                <label for="id" >ID</label>
                </div>
                  <div class="col-md-8">
                    {{$value->id}}
                  </div>
                    </div>
                      <div class="row" style="padding-top:10px;">
                  <div class="col-md-2" style="text-align:right;">
                    <label for="username">User Name</label>
                    </div>
                  <div class="col-md-8">
                    {{$value->username}}
                  </div>
                    </div>

                      <div class="row" style="padding-top:10px;">
                        <div class="col-md-2" style="text-align:right;">
                          <label for="name" >First Name</label>
                        </div>
                        <div class="col-md-8">
                        {{$value->firstname}}
                        </div>
                          </div>
                          <div class="row" style="padding-top:10px;">
                          <div class="col-md-2" style="text-align:right;">
                          <label for="lastname">Last Name</label>
                          </div>
                          <div class="col-md-8">

                          {{$value->lastname}}
                          </div>
                          </div>
                          <div class="row" style="padding-top:10px;">
                            <div class="col-md-2" style="text-align:right;">
                              <label for="companyname" >Company Name</label>
                            </div>
                            <div class="col-md-8">
                                {{$value->companyname}}
                            </div>
                              </div>
                              <div class="row" style="padding-top:10px;">
                            <div class="col-md-2" style="text-align:right;">
                              <label for="address">Address</label>
                            </div>
                            <div class="col-md-8">

                              {{$value->address}}
                            </div>
                              </div>
                              <div class="row" style="padding-top:10px;">
                          <div class="col-md-2" style="text-align:right;">
                            <label for="email">E-Mail</label>
                            </div>
                          <div class="col-md-8">

                              {{$value->email}}
                          </div>
                            </div>
                            <div class="row" style="padding-top:10px;">
                        <div class="col-md-2" style="text-align:right;">
                          <label for="tel">Tel</label>
                          </div>
                        <div class="col-md-8">

                          {{$value->tel}}
                        </div>
                          </div>
                          <div class="row" style="padding-top:10px;">
                          <div class="col-md-2" style="text-align:right;">
                          <label for="Fax">Fax</label>
                          </div>
                          <div class="col-md-8">

                            {{$value->fax}}
                          </div>
                          </div>
                          <div class="row" style="padding-top:10px;">
                          <div class="col-md-2" style="text-align:right;">
                          <label for="taxno">No.Tex</label>
                          </div>
                          <div class="col-md-8">
                            {{$value->taxno}}
                          </div>
                          </div>
                          <div class="row" style="padding-top:10px;">
                            <div class="col-md-2" style="text-align:right;">
                              <label for="by">By</label>
                            </div>
                            <div class="col-md-8">
                              {{$value->by}}
                            </div>
                          </div>
                          <div class="row" style="padding-top:10px;">
                          <div class="col-md-2" style="text-align:right;">
                          <label for="date">Date Time</label>
                          </div>
                          <div class="col-md-8">
                            {{$value->date}}
                          </div>
                          </div>



                              <div  style="text-align:center;padding-top:20px;" >
                                <a href="{{url('customer')}}" class="btn btn-primary">Back</a>
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
