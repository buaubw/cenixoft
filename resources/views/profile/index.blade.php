@extends('layouts.app')

@section('content')

<div class="content-wrapper" style="height:1000px;">



<div class="container" style="padding-top:50px;">
  <div class="col-md-2">
<!-- <a href="{{ url('profile/create') }}" class="btn btn-block btn-warning">Create</a> -->



<!-- Small modal -->
<button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-sm">Create</button>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">Create Profile</h3>
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->
                  <form role="form">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name">
                      </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <center><button type="submit" class="btn btn-primary">Cancel</button>
                      <button type="submit" class="btn btn-primary">Submit</button></center>
                    </div>

                  </form>
                </div>
    </div>
  </div>
</div>




</div>

  <div class="row" style="padding-top:50px;">
    <div class="col-xs-10 col-md-11">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Profile</h3>

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
              <th>Project Name</th>
              <th>Date Time</th>
              <th>By</th>
              <th>View</th>
              <th>Edit</th>
              <th>Remove</th>
            </tr>
            <tr>
              <td>001</td>
              <td>Logo Design</td>
              <td>11-7-2014</td>
              <td>Bua</span></td>
              <td><a ><i class="fa fa-eye"></i> </a>



              </td>
              <td><a><i class="fa fa-edit"></i> </a></td>
              <td><button onclick="myFunction()"><i class="fa fa-times"></i> </button>
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
