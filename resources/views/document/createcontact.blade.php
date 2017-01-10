@extends('layouts.app0')

@section('content')

<div class="content-wrapper" style="height:1000px;">
  <div class="container" style="padding-top:30px;">
    <div class="col-md-2">
      <!-- <a href="{{ url('profile/create') }}" class="btn btn-block btn-warning">Create</a> -->
      <div class="container" style="padding-top:30px;">
        <div class="col-md-8">


        </div>
        <div class="row" style="padding-top:50px;">
          <div class="col-xs-10 col-md-10">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Create Contact</h3>
                <div class="box-body ">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-4 col-xs-3" style="text-align:right;">
                        <label for="firstname" >Title</label>
                      </div>
                      <div class="col-md-6 col-xs-9">
                        <input class="form-control" type="text" id="Title"  name="Title" value="" placeholder="Title">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-4 col-xs-3" style="text-align:right;">
                        <label for="firstname" >Upload file</label>
                      </div>
                      <div class="col-md-6 col-xs-9">
                        <a  href="{{url('document/uploadfile')}}" class="btn  btn-warning" style="">Uploadfile</a>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-4 col-xs-3" style="text-align:right;">
                      </div>
                      <div class="col-md-6 col-xs-9">
                        <button type="submit" class="btn btn-primary">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                    </div>
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
