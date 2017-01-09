@extends('layouts.app0')

@section('content')

<div class="content-wrapper" style="height:1000px;">



<div class="container" style="padding-top:30px;"
  <div class="col-md-2">
<!-- <a href="{{ url('profile/create') }}" class="btn btn-block btn-warning">Create</a> -->
<div class="container" style="padding-top:30px;">
  <div class="col-md-8">


</div>
  <div class="row" style="padding-top:50px;">
    <div class="col-xs-10 col-md-10">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Create Requirement</h3>
          <div class="box-body ">

<br>
<br>
            <div class="row">
              <div class="col-md-4" style="text-align:right;">
                <label for="firstname" >Title</label>
              </div>
                <div class="col-md-6">
                <input class="form-control" type="text" id="Title"  name="Title" value="" placeholder="Title">
              </div>
              <div class="row">
                <div class="col-md-4" style="text-align:right;">
                  <label for="firstname" >Upload file</label>
                </div>
                <a  href="{{url('document/Uploadfile')}}" class="btn  btn-warning" style=" margin-left: 20px">Uploadfile</a>

                            </div>

<br>
<br>
<br>
<div class="row">
              <center>
                 <button type="submit" class="btn btn-primary">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div></center>
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
