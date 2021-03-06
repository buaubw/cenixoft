@extends('layouts.app0')

@section('content')

<div class="content-wrapper" style="height:1000px;">

<div class="container" style="padding-top:50px;">

<!-- <a href="{{ url('profile/create') }}" class="btn btn-block btn-warning">Create</a> -->
<div class="container" style="padding-top:20px;">
  <div class="col-xs-10 col-md-10">

</div>

    <div class="col-xs-10 col-md-10">
  <form action="{{ action('EducationController@update') }}" method="POST">

      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Edit Education Zone</h3>
          <div class="box-body ">
            <div class="form-group">
            <div class="row" style="padding-top:10px;">
              <div class="col-md-2" style="text-align:right;">
                <label for="type" >Name</label>
              </div>
              <div class="col-md-6">
                <input class="form-control" type="text" id="type"  name="type" value="{{ $value->type }}" placeholder="Name">
              </div>

            </div>
            <div class="row" style="padding-top:10px;">
              <div class="col-md-2" style="text-align:right;">
                <label for="url" >URL</label>
              </div>
              <div class="col-md-4">
                  <input class="form-control" type="file" id="url"  name="url" value="{{ $value->url }}"  placeholder="Name">
              </div>

            </div>
            <div class="row" style="padding-top:10px;">
              <div class="col-md-2" style="text-align:right;">
                <label for="name" >Description</label>
              </div>
              <div class="col-md-4">
                <input class="form-control" type="text" id="description"  name="description" value="" placeholder="description">
                <textarea class="form-control"  id="description"  name="description">

                </textarea>
              </div>

            </div>
            <div  style="text-align:center;padding-top:20px;" >
                <a action="{{url('education')}}" class="btn btn-danger">Cancel</a>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>







          </div>

        </div>
        <!-- /.box-header -->

        <!-- /.box-body -->
      </div>


</div>
</form>
</div>
</div>
</div>



@endsection
