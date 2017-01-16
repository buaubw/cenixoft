@extends('layouts.app00')

@section('content')

<div class="content-wrapper" style="height:1000px;">

<div class="container" style="padding-top:50px;">

<!-- <a href="{{ url('profile/create') }}" class="btn btn-block btn-warning">Create</a> -->

    <div class="col-xs-10 col-md-10">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">View Education Zone</h3>
          <div class="box-body ">

            <div class="row" style="padding-top:10px;">
              <div class="col-md-2" style="text-align:right;">
                <label for="No" >Name</label>
                </div>
                  <div class="col-md-8">
                    {{$value->type}}
                    <!-- <input class="form-control" type="text" id="name"  name="name" value="" placeholder="Name."> -->
                  </div>
                    </div>
                      <div class="row" style="padding-top:10px;">
                  <div class="col-md-2" style="text-align:right;">
                    <label for="username">File</label>
                    </div>
                  <div class="col-md-8">
                    <iframe width="300" height="200" src="{{$value->url}}" frameborder="0" allowfullscreen></iframe>
                  </div>
                    </div>
                    <div class="row" style="padding-top:10px;">
                    <div class="col-md-2" style="text-align:right;">
                    <label for="username">Description</label>
                    </div>
                    <div class="col-md-8">
                    {{$value->description}}
                    </div>
                    </div>
                      <div class="row" style="padding-top:10px;">
                        <div class="col-md-2" style="text-align:right;">
                          <label for="name" >By</label>
                        </div>
                        <div class="col-md-8">
                          {{$value->by}}
                        </div>
                          </div>
                          <div class="row" style="padding-top:10px;">
                          <div class="col-md-2" style="text-align:right;">
                          <label for="username">Date Time</label>
                          </div>
                          <div class="col-md-8">
                          {{$value->date}}
                          </div>
                          </div>




                              <div  style="text-align:center;padding-top:20px;" >
                                <a href="{{url('education')}}" class="btn btn-primary">Back</a>
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
