@extends('layouts.app0')

@section('content')

<div class="content-wrapper" style="height:1000px;">


<div class="container" style="padding-top:50px;">
  <div class="col-md-2">
<button type="button" class="btn btn-block btn-warning">Create</button>
</div>

  <div class="row" style="padding-top:50px;">
    <div class="col-xs-10 col-md-10">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Logo design</h3>

          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Image</th>
              <th>Date Time</th>
              <th>By</th>
              <th>View</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
            <tr>
              <td>183</td>
              <td>John Doe</td>
              <td><img src="" style="width:30px;height:auto;"></td>
              <td>11-7-2014</td>
              <td>bua</td>
              <td><a><i class="fa fa-eye"></i> </a></td>
              <td><a><i class="fa fa-edit"></i> </a></td>
              <td><a><i class="fa fa-times"></i> </a></td>
            </tr>

          </table>
        </div>
        <!-- /.box-body -->
      </div>



</div>

</div>
</div>
</div>






@endsection