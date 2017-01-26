@extends('layouts.app0')

@section('content')

<div class="content-wrapper" style="height:900px;">


<div class="container" style="padding-top:20px;">
  <h3 class="box-title">Customer Managment</h3>
  <div class="col-md-2">
<!-- <a href="{{ url('profile/create') }}" class="btn btn-block btn-warning">Create</a> -->

<a href="{{url('account/createcustomer')}}" class="btn btn-warning" style=" margin-left: 20px">Create new account</a>

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
              <th>Password</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Date Time</th>
              <th>By</th>
              <th>View</th>
              <th>Remove</th>
            </tr>
            <tr>
              <td>001</td>
              <td>Logo Design</td>
              <td>11-7-2014</td>
              <td>11-7-2014</td>
              <td>Bua</span></td>
              <td>Bua</span></td>
              <td>11-7-2014</td>
              <td style="text-align: center;"><a href="{{url('account/viewcustomer')}}"><i class="fa fa-eye"></i></td>
                <td style="text-align:center;">
                  <form action="customer/<?php echo $value->id; ?>" method="POST">
                 {{ csrf_field() }}
                 {{ method_field('DELETE') }}
                 <input type="hidden" name="id" value="{{$value->id}}" />
                 <button type="submit" class="btn btn-danger" style="display: inline-block;" onclick="return confirm('Are you sure?')"><i class="fa fa-remove"></i></button>
                 </form>
              </td>

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
