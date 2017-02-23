@extends('layouts.app')

@section('content')

<div class="content-wrapper" style="min-height:700px;">
<div class="container" style="padding-top:50px;">
  <div class="col-md-2">
<a href="{{url('website/create')}}"  class="btn btn-block btn-warning">Create</a>
</div>

  <div class="row" style="padding-top:50px;">
    <div class="col-xs-10 col-md-10">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Website</h3>

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
              <th>No</th>
              <th>Custome Name</th>
              <th>Picture</th>
              <th>Date Time</th>
              <th>By</th>
              <th>View</th>
              <th>Edit</th>
              <th>Remove </th>
            </tr>
              <?php $count =1 ?>
              @foreach($values as $value)
            <tr>
                <td>{{$count}}</td>
              <td>{{$value->customername}}</td>
              <td><img src="WebsiteImage/{{$value->customerlogo}}" style="width:50px;height:auto;"></td>
              <td>{{$value->date}}</td>
                <td>{{$value->by}}</td>
                <td><a href= {{url('website/'.  $value->id .'')}} class="btn btn-primary"><i class="fa fa-eye"></i> </a></td>
                <td><a href= {{url('website/'.  $value->id .'/edit')}} class="btn btn-warning" ><i class="fa fa-edit"></i> </a></td>
                <td>
                  <form action="website/<?php echo $value->id; ?>" method="POST">
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
