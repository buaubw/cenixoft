@extends('layouts.app0')

@section('content')

<div class="content-wrapper" style="height:1000px;">

<div class="container" style="padding-top:50px;">

<!-- <a href="{{ url('profile/create') }}" class="btn btn-block btn-warning">Create</a> -->
<div class="container" style="padding-top:50px;">
  <div class="col-xs-10 col-md-10">

</div>

    <div class="col-xs-10 col-md-10">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Create Education Zone</h3>
          <div class="box-body ">
            <div class="form-group">
            <div class="row" style="padding-top:10px;">
              <div class="col-md-2" style="text-align:right;">
                <label for="firstname" >Name</label>
              </div>
              <div class="col-md-6">
                <input class="form-control" type="text" id="name"  name="name" value="" placeholder="Name">
              </div>

            </div>
            <div class="row" style="padding-top:10px;">
              <div class="col-md-2" style="text-align:right;">
                <label for="name" >Upload File</label>
              </div>
              <div class="col-md-4">
                  <a  href="{{url('education/uploadfileeducation')}}" class="btn  btn-warning" style="">Uploadfile</a>
              </div>

            </div>
            <div class="row" style="padding-top:10px;">
              <div class="col-md-2" style="text-align:right;">
                <label for="name" >Description</label>
              </div>
              <div class="col-md-4">
                <input class="form-control" type="text" id="description"  name="description" value="" placeholder="description">
              </div>

            </div>
            <div  style="text-align:center;padding-top:20px;" >
                <button type="submit" class="btn btn-primary">Cancel</button>
              <button type="submit" class="btn btn-primary">Save</button>
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
