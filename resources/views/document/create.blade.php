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
          <h3 class="box-title">Create Document</h3>
          <div class="box-body ">

            <div class="row">
              <div class="col-md-2" style="text-align:right;">
                <label for="firstname" >Name Company</label>
              </div>
              <div class="col-md-4">
                <input class="form-control" type="text" id="Name Company"  name="Name Company" value="" placeholder="Name Company">
              </div>
<br>
<br>
<br>
<div class="row">
              <div  class="box-footer">
                  <button type="submit" class="btn btn-primary">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
</div>

            </div>










          </div>

        </div>
        <!-- /.box-header -->

        <!-- /.box-body -->
      </div>


</div>

</div>
</div>
</div>





@endsection
