@extends('layouts.app0')

@section('content')

<div class="content-wrapper" style="height:1000px;">

<div class="container" style="padding-top:20px;">

<!-- <a href="{{ url('profile/create') }}" class="btn btn-block btn-warning">Create</a> -->
<div class="container" style="">
  <div class="col-xs-10 col-md-10">

</div>

    <div class="col-xs-10 col-md-10">
      <form action="{{ action('EducationController@store') }}" method="POST">

          {{ csrf_field() }}
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Create Education Zone</h3>
          <div class="box-body ">
            <div class="form-group">
            <div class="row" style="padding-top:10px;">
              <div class="col-md-2" style="text-align:right;">
                <label for="type" >Name</label>
              </div>
              <div class="col-md-6">
                <input class="form-control" type="text" id="type"  name="type" value="" placeholder="Name" value="{{ old('type') }}">
              </div>

            </div>
            <div class="row" style="padding-top:10px;">
              <div class="col-md-2" style="text-align:right;">
                <label for="url" >URL</label>
              </div>
              <div class="col-md-6">
                  <input class="form-control" type="text" id="url"  name="url"  placeholder="URL" {{ old('url') }}>
              </div>

            </div>
            <div class="row" style="padding-top:10px;">
              <div class="col-md-2" style="text-align:right;">
                <label for="name" >Description</label>
              </div>
              <div class="col-md-6">
<textarea class="form-control" rows="5" id="description" name="description"> {{ old('description') }} </textarea>
              </div>

            </div>
            <div  style="text-align:center;padding-top:20px;" >
                <a href="{{url('education')}}" class="btn btn-danger">Cancel</a>
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
