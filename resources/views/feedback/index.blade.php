@extends('layouts.app')

@section('content')

<div class="content-wrapper" style="height:1000px;">



<div class="container" style="padding-top:20px;">
<h3 class="box-title">Feedback</h3>

  <div class="row" style="padding-top:10px;">
    <div class="col-xs-10 col-md-10">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"></h3>

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
              <th>Project Name</th>
              <th>Create Date</th>
              <th style="text-align: center;">View</th>
            </tr>
            <?php $count=1; ?>
            @foreach($values as $value)
            <tr>
              <td>
                {{$count}}
                <?php $count++; ?>
              </td>
              <td>{{$value->pname}}</td>
              <td>{{$value->create}}</td>
              <td style="text-align: center;"><a href= {{url('feedback/view/'.$value->fid )}} class="btn btn-primary" ><i class="fa fa-eye"></i> </a></td>
            </tr>
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
