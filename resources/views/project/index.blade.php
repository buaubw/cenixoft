@extends('layouts.app')

@section('content')

<div class="content-wrapper" style="height:600px;">


<div class="container" style="padding-top:20px;">
    <h3 class="box-title">Project</h3>
  <div class="col-md-2">
<!-- <a href="{{ url('profile/create') }}" class="btn btn-block btn-warning">Create</a> -->
<a href="{{url('project/create')}}" class="btn btn-warning" style=" margin-left: 0px">Create</a>
</div>

  <div class="row" style="padding-top:50px;">
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
              <th>View</th>
              <!-- <th>View</th> -->
              <!-- <th>Edit</th> -->
              <th style="text-align:center;">Remove</th>
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
              <td><a href= {{url('project/'.  $value->id .'/edit')}} class="btn btn-warning" ><i class="fa fa-edit"></i> </a></td>
              <td style="text-align:center;">
                <form action="project/<?php echo $value->id; ?>" method="POST">
               {{ csrf_field() }}
               {{ method_field('DELETE') }}
               <input type="hidden" name="id" value="{{$value->id}}" />
               <button type="submit" class="btn btn-danger" style="display: inline-block;" onclick="return confirm('Are you sure?')"><i class="fa fa-remove"></i></button>
               </form>
            </td>


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
