@extends('layouts.app')

@section('content')

<div class="content-wrapper" style="height:1000px;">



<div class="container" style="padding-top:50px;">
  <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box" style="padding:15px;">
        <!-- <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i> -->
        <a href="{{url('logo')}}">
        <center><img src="/image/logo.png"  style="width:80px;">
          <h4><span class="info-box-text">Logo</span></h4>
        </center></a>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box" style="padding:15px;">
        <a href="{{url('mobile')}}">
        <center><img src="/image/mobile.png"  style="width:80px;">
          <h4><span class="info-box-text">Mobile</span></h4>
        </center></a>


        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix visible-sm-block"></div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box" style="padding:15px;">
        <a href="{{url('website')}}">
        <center><img src="/image/website.png"  style="width:80px;">
          <h4><span class="info-box-text">Website</span></h4>
        </center></a>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- /.col -->
  </div>

</div>
</div>






@endsection
