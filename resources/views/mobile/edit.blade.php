@extends('layouts.app00')

@section('content')

<div class="content-wrapper" style="height:1200px;">

<div class="container" style="padding-top:50px;">

    <div class="col-xs-10 col-md-10">
        <form method="POST" action = "{{url('/')}}/mobile/<?php echo $value->id; ?>" enctype="multipart/form-data">
            {{ csrf_field() }}
          {{ method_field('PUT') }}
        <input type="hidden" name="id" value="{{$value->id}}" />
        <input type="hidden" name="by" value="{{$value->by}}" />
        <input type="hidden" name="date" value="{{$value->date}}" />
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Edit Mobile design</h3>
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
                <label for="firstname" >Name</label>
              </div>
              <div class="col-md-6">
                <input class="form-control" type="text" id="customername"  name="customername" value="{{$value->customername}}" placeholder="Customer Name">
              </div>

            </div>
            <div class="row" style="padding-top:10px;">
              <div class="col-md-2" style="text-align:right;">

                <label for="customerlogo" >Upload Logo File</label>
              </div>
              <div class="col-md-6">
                  <label for="" >{{$value->customerlogo}}</label>
                  <input class="form-control" type="file" id="customerlogo"  name="customerlogo" >
              </div>

            </div>
            <div class="row" style="padding-top:10px;">
              <div class="col-md-2" style="text-align:right;">
                <label for="tools" >Tools</label>
              </div>
              <div class="col-md-10">
                <textarea name="tools" rows="8" cols="80" id="tools">{{$value->tools}}
                </textarea>

              </div>
              <script>

                CKEDITOR.replace( 'tools' );
            </script>
            </div>
            <div class="row" style="padding-top:10px;">
              <div class="col-md-2" style="text-align:right;">
                <label for="name" >Description</label>
              </div>
              <div class="col-md-10">
                <!-- <input class="form-control" type="textarea" id="description"  name="description" value="" placeholder="description"> -->
                <textarea name="description" rows="8" cols="80" id="description">{{$value->description}}
                </textarea>
              </div>
              <script>
                CKEDITOR.replace( 'description' );
            </script>
            </div>
            <div class="row" style="padding-top:10px;">
              <div class="col-md-2" style="text-align:right;">

                <label for="picture" >Upload Picture File</label>
              </div>
              <div class="col-md-6">
                  <label for="" >{{$value->picture}}</label>
                  <input class="form-control" type="file" id="picture"  name="picture" >
              </div>

            </div>
            <div  style="text-align:center;padding-top:20px;" >
                  <a href= {{url('mobile')}} class="btn btn-danger">Cancel</a>
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



@endsection
