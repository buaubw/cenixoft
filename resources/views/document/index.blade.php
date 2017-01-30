@extends('layouts.app')

@section('content')

<div class="content-wrapper" style="height:600px;">


<div class="container" style="padding-top:20px;">
    <h3 class="box-title">Document Store</h3>


    <div class="col-xs-10 col-md-10">
      <div class="box">
        <div class="box-header">

        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>No</th>
              <th>Project Name</th>
              <th>Customer Name</th>
              <th>Type</th>
              <th>Date Time</th>
              <th>By</th>
              <!-- <th>View</th> -->
              <th>View</th>

            </tr>
              <?php $count =1 ?>
            @foreach($values as $value)


            <tr>
              <td>{{$count}}</td>
              <td>{{$value->name}}</td>

              <td>
                @foreach($customers as $customer)
              @if($customer->id==$value->customer_id)
                {{$customer->companyname}}
              @endif
              @endforeach
              </td>
              <td>{{$value->type}}</td>
              <td>{{$value->date}}</td>
              <td>{{$value->by}}</td>
              <!-- <td><a href= {{url('project/'.  $value->id .'/vieweducation')}} class="btn btn-primary"><i class="fa fa-eye"></i> </a></td> -->
              <td><a href= {{url('requirement/listdata/'.  $value->id .'')}} class="btn btn-primary" ><i class="fa fa-eye"></i> </a></td>

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






@endsection
