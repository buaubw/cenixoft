@extends('layouts.app0')

@section('content')

<div class="content-wrapper" style="height:1000px;">
  <div class="container" style="padding-top:50px;">
<!-- <a href="{{ url('profile/create') }}" class="btn btn-block btn-warning">Create</a> -->
<div class="container" style="padding-top:20px;">
  <div class="col-xs-10 col-md-10">

</div>

    <div class="col-xs-10 col-md-10">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Create Quotation</h3>
          <div class="box-body ">
            <div class="form-group">
            <div class="row" style="padding-top:10px;">
              <div class="col-md-2" style="text-align:right;">
                <label for="firstname" >Title</label>
              </div>
              <div class="col-md-6">
                <input class="form-control" type="text" id="title"  name="title" value="" placeholder="title">
              </div>

            </div>
            <div class="row" style="padding-top:10px;">
              <div class="col-md-2" style="text-align:right;">
                <label for="name" >Upload File</label>
              </div>
              <div class="col-md-4">
                  <input class="form-control" type="file" id="name"  name="name"  placeholder="Name">
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
