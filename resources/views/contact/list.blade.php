@extends('layouts.app00')

@section('content')
<div class="content-wrapper" style="min-height:700px;">
<div class="container" style="padding-top:20px;">
    <div class="col-xs-10 col-md-10">
      <center>
        <a  href="{{url('document')}}" class="btn btn-primary" style=" margin-left: 20px">All Project</a>
        <a  href="{{url('requirement/listdata')}}/{{$project_id}}" class="btn btn-primary " style=" margin-left: 20px">Requirement</a>
        <a  href="{{url('quatation/listdata')}}/{{$project_id}}" class="btn  btn-primary" style=" margin-left: 20px">Quotation</a>
        <a  href="{{url('contact/listdata')}}/{{$project_id}}" class="btn btn-success " style=" margin-left: 20px" >Contact</a>
        <a  href="{{url('invoice/listdata')}}/{{$project_id}}" class="btn btn-primary " style=" margin-left: 20px">Invoice</a>
      </center>

        <a href="{{url('contact/create2')}}/{{$project_id}}"  class="btn btn-warning " style=" margin-top: 20px">Create</a>
    </div>

      <div class="row" style="padding-top:20px;">
        <div class="col-xs-10 col-md-10">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><strong>Contact:</strong> {{$project->name}} Project</h3>
                <div class="box-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                      </div>
                  </div>
                </div>
            </div>

<style>
ul.nav.nav-tabs>li.active>a{
  background-color: #ffb800;

}
</style>
<ul class="nav nav-tabs">
  <li class="active" ><a data-toggle="tab" href="#Cenixoft">Cenixoft</a></li>
  <li><a data-toggle="tab" href="#Customer">Customer</a></li>

</ul>

<div class="tab-content">
  <div id="Cenixoft" class="tab-pane fade in active">
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tr>
          <th>No.</th>
          <th>Title</th>
          <th>Date time</th>
          <th>By</th>
          <th style="text-align: center;width:60px;">View</th>
          <!-- <th style="text-align: center;">Edit</th> -->
          <th style="text-align: center;width:60px;">Remove</th>
        </tr>

        <?php $count =1 ?>
        @foreach($values as $value)
      <tr>
          <td>{{$count}}</td>
        <td>{{$value->title}}</td>
        <td>{{$value->date}}</td>
          <td>{{$value->by}}</td>
          <td style="text-align:center;"><a href= {{url('documents/contact/'.  $value->filename .'')}} class="btn btn-primary"><i class="fa fa-eye"></i> </a></td>
          <!-- <td style="text-align:center;"><a href= {{url('contact/'.  $value->id .'')}} class="btn btn-primary"><i class="fa fa-eye"></i> </a></td> -->
          <!-- <td style="text-align:center;"><a href= {{url('contact/'.  $value->id .'/edit')}} class="btn btn-warning" ><i class="fa fa-edit"></i> </a></td> -->
          <td style="text-align:center;">
            <form action="../../contact/<?php echo $value->id; ?>" method="POST">
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
  </div>
  <div id="Customer" class="tab-pane fade">
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tr>
          <th>No.</th>
          <th>Title</th>
          <th>Date time</th>
          <th>By</th>
          <th style="text-align: center;">View</th>
          <!-- <th style="text-align: center;">Edit</th>
          <th style="text-align: center;">Remove</th> -->
        </tr>

        <?php $count =1 ?>
        @foreach($valuescustomer as $value2)
      <tr>
          <td>{{$count}}</td>
        <td>{{$value2->title}}</td>
        <td>{{$value2->date}}</td>
          <td>{{$value2->by}}</td>
          <td style="text-align:center;"><a href= {{url('documents/customercontact/'.  $value2->filename .'')}} class="btn btn-primary"><i class="fa fa-eye"></i> </a></td>
      </tr>

<?php $count++ ?>
@endforeach
      </table>
    </div>
  </div>

</div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
