@extends('customerapp.layouts.app20')

@section('content')

<body style="background:white;">
  <div class="row" style="margin-top:120px;">
<div class="container">
<h4>Upload Contact Project: {{$project->name}}</h4>
<form action="{{ action('CustomercontactController@store') }}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
      <input type="hidden" value="{{$project->id}}" name="project_id">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="title" name="title" placeholder="Title">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Upload File</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="filename" name="filename">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
      <a href"{{url('document/document<?php echo '/'.$project->id ?>')}}" class="btn btn-default">cancel</a>
    </div>
  </div>
</form>


</div>
</div>
</body>

@endsection
