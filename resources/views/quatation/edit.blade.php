@extends('layouts.app00')

@section('content')

<div class="content-wrapper" style="height:1000px;">
  <div class="container" style="padding-top:30px;">
    <div class="col-md-2">
      <!-- <a href="{{ url('profile/create') }}" class="btn btn-block btn-warning">Create</a> -->
      <div class="container" style="padding-top:30px;">
        <div class="col-md-8">


        </div>
        <div class="row" style="padding-top:50px;">

          <form method="POST" action = "{{url('/')}}/quatation/<?php echo $value->id; ?>" enctype="multipart/form-data">
              {{ csrf_field() }}
            {{ method_field('PUT') }}

          <div class="col-xs-10 col-md-10">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Edit Qoatation</h3>
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                  <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
                  </ul>
                </div>
              @endif

              <input type="hidden" name="project_id" value="{{$value->project_id}}">
              <input type="hidden" name="id" value="{{$value->id}}">
              <input type="hidden" name="by" value="{{$value->by}}">
              <input type="hidden" name="date" value="{{$value->date}}">
                <div class="box-body ">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-4 col-xs-3" style="text-align:right;">
                        <label for="title" >Title</label>
                      </div>
                      <div class="col-md-6 col-xs-9">
                        <input class="form-control" type="text" id="title"  name="title" value="{{$value->title}}" placeholder="Title">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-4 col-xs-3" style="text-align:right;">

                        <label for="filename" >Upload file</label>
                      </div>
                      <div class="col-md-6 col-xs-9">
                        <label for="" >{{$value->filename}}</label>
                        <input class="form-control" type="file" id="filename"  name="filename" >
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-4 col-xs-3" style="text-align:right;">
                      </div>
                      <div class="col-md-6 col-xs-9">
                          <a href="{{url('/')}}/quatation/listdata/<?php echo $value->project_id; ?>" class="btn btn-primary">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- /.box-header -->
      </form>

        <!-- /.box-body -->
        </div>
      </div>
    </div>
  </div>
</div>





@endsection
