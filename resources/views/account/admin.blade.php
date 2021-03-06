@extends('layouts.app0')

@section('content')

<div class="content-wrapper" style="height:1000px;">


<div class="container" style="padding-top:20px;">
    <h3 class="box-title">Admin Management</h3>
  <div class="col-md-2">
<!-- <a href="{{ url('profile/create') }}" class="btn btn-block btn-warning">Create</a> -->
<a href="{{url('account/createadmin')}}" class="btn btn-warning" style=" margin-left: ;padding-top:10px;">Create new account</a>
</div>

  <div class="row" style="padding-top:50px;">
    <div class="col-xs-10 col-md-10">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"></h3>

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
              <th>Username</th>
              <th>Full Name</th>
              <th>Email</th>
              <th>Date Time</th>
              <!-- <th>By</th> -->
              <th>Remove</th>
            </tr>
            <?php $count =1 ?>
            @foreach($values as $value)
            <tr>
              <td>{{$count}}</td>
              <td>{{$value->username}}</td>
              <td>{{$value->name}}</td>
              <td>{{$value->email}}</td>
              <td>{{$value->created_at}}</td>
              <td style="text-align:center;">
                <form action="../account/<?php echo $value->id; ?>" method="POST">
               {{ csrf_field() }}
               {{ method_field('DELETE') }}
               <input type="hidden" name="id" value="{{$value->id}}" />
               <button type="submit" class="btn btn-danger" style="display: inline-block;" onclick="return confirm('Are you sure?')"><i class="fa fa-remove"></i></button>
               </form>
            </td>

            </tr>
            <?php $count++ ?>
            @endforeach
          </table>

        </div>
        <!-- /.box-body -->
      </div>



</div>

</div>
</div>
</div>






@endsection
