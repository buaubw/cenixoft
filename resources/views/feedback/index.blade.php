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
              <th>Company Name</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>View</th>
            </tr>
            <tr>
              <td>001</td>
              <td>Logo Design</td>
              <td>11-7-2014</td>
              <td>Bua</span></td>
              <td>Bua</span></td>
              <td><a ><i class="fa fa-eye"></i> </a>
              </td>
                <script>
function myFunction() {
    var x;
    if (confirm("Press a button!") == true) {
        x = "You pressed OK!";
    } else {
        x = "You pressed Cancel!";
    }
    document.getElementById("demo").innerHTML = x;
}
</script>




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
