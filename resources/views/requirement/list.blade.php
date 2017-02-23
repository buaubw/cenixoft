@extends('layouts.app00')

@section('content')

<div class="content-wrapper" style="height:700px;">
  <div class="container" style="padding-top:20px;">

    <div class="col-md-8">
      <center>
        <a  href="{{url('document')}}" class="btn btn-primary" style=" margin-left: 20px">All Project</a>
        <a  href="{{url('requirement/listdata')}}/{{$project_id}}" class="btn btn-success " style=" margin-left: 20px">Requirement</a>
        <a  href="{{url('quatation/listdata')}}/{{$project_id}}" class="btn  btn-primary" style=" margin-left: 20px">Quotation</a>
        <a  href="{{url('contact/listdata')}}/{{$project_id}}" class="btn btn-primary " style=" margin-left: 20px" >Contact</a>
        <a  href="{{url('invoice/listdata')}}/{{$project_id}}" class="btn btn-primary " style=" margin-left: 20px">Invoice</a>
      </center>

        <a href="{{url('requirement/create2')}}/{{$project_id}}"  class="btn btn-warning " style=" margin-top: 20px">Create</a>
    </div>

      <div class="row" style="padding-top:20px;">
        <div class="col-xs-10 col-md-10">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><strong>Requirement:</strong> {{$project->name}} Project</h3>
                <div class="box-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search" id="inputsearch" onkeyup="myFunctionSearch()">
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                      </div>
                  </div>
                </div>
            </div>
        <!-- /.box-header -->
              <div class="box-body table-responsive no-padding">
                <table class="table table-hover" id="searchtable">
                  <tr>
                    <th>No.</th>
                    <th></th>
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
                  <td></td>
                  <td>{{$value->title}}</td>
                  <td>{{$value->date}}</td>
                    <td>{{$value->by}}</td>
                    <td style="text-align:center;"><a href= {{url('documents/requirement/'.  $value->filename .'')}} class="btn btn-primary"><i class="fa fa-eye"></i> </a></td>
                    <!-- <td style="text-align:center;"><a href= {{url('requirement/'.  $value->id .'')}} class="btn btn-primary"><i class="fa fa-eye"></i> </a></td> -->
                    <!-- <td style="text-align:center;"><a href= {{url('requirement/'.  $value->id .'/edit')}} class="btn btn-warning" ><i class="fa fa-edit"></i> </a></td> -->
                    <td style="text-align:center;">
                      <form action="../../requirement/<?php echo $value->id; ?>" method="POST">
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


<script>
function myFunctionSearch() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("inputsearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("searchtable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>



@endsection
