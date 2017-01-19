@extends('layouts.app00')

@section('content')

<div class="content-wrapper" style="height:1200px;">

<div class="container" style="padding-top:50px;">

<!-- <a href="{{ url('profile/create') }}" class="btn btn-block btn-warning">Create</a> -->
<div class="container" style="padding-top:20px;">
  <div class="col-xs-10 col-md-10">

</div>

    <div class="col-xs-10 col-md-10">
        <form action="{{ action('ContactController@store') }}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              <input type="hidden" value="{{$value}}" name="project_id">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Create Contact</h3>
          @if (count($errors) > 0)
          <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
          </div>
        @endif
          <div class="box-body ">
            <div class="form-group">
            <div class="row" style="padding-top:10px;">
              <div class="col-md-2" style="text-align:right;">
                <label for="title" >Title</label>
              </div>
              <div class="col-md-6">
                <input class="form-control" type="text" id="title"  name="title" value="" placeholder="title">
              </div>

            </div>


            <div class="row" style="padding-top:10px;">
              <div class="col-md-2" style="text-align:right;">
                <label for="filename" >Upload File</label>
              </div>
              <div class="col-md-6">
                  <input class="form-control" type="file" id="filename"  name="filename" >
              </div>

            </div>
            <div  style="text-align:center;padding-top:20px;" >
                <a href="{{url('/')}}/contact/listdata/<?php echo $value; ?>" class="btn btn-primary">Cancel</a>
              <button type="submit" class="btn btn-primary" onclick=''>Save</button>
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
