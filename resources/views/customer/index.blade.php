@extends('layouts.app')

@section('content')

<div class="content-wrapper" style="height:900px;">


<div class="container" style="padding-top:20px;">
  <h3 class="box-title">Customer Managment</h3>
  <div class="col-md-2">
<!-- <a href="{{ url('profile/create') }}" class="btn btn-block btn-warning">Create</a> -->

<a href="{{url('customer/create')}}" class="btn btn-warning" style=" margin-left: 20px">Create new account</a>

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
              <!-- <th>Password</th> -->
              <th>First Name</th>
              <th>Last Name</th>
              <th>Date Time</th>
              <th>By</th>
              <th>View</th>
              <th>Remove</th>
            </tr>
            <?php $count =1 ?>
          @foreach($values as $value)
            <tr>
              <td>{{$count}}</td>
              <td>{{$value->username}}</td>
              <!-- <td>11-7-2014</td> -->
              <td>{{$value->firstname}}</td>
              <td>{{$value->lastname}}</span></td>
              <td>{{$value->date}}</span></td>
              <td>{{$value->by}}</td>
              <td style="text-align: center;"><a href="{{url('account/viewcustomer')}}" class="btn btn-primary"><i class="fa fa-eye"></i></td>
                <td>
                    <button id="myBtn{{$value->id}}" class="btn btn-danger"><i class="fa fa-remove"></i></button>
                    <div id="myModal" class="modal">

                      <!-- Modal content -->
                        <div class="modal-content" >
                        <span class="close">&times;</span>
                        <p>ยืนยันการลบข้อมูล</p>
                        <table>
                          <tr>
                            <td style="padding:10px;"> <button type="button" class="btn btn-danger " id="closex" style="display: inline-block;"><i class="fa fa-remove "></button></td>
                            <td style="padding:10px;">  <form action="education/{{ $value->id }}" method="POST">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}

                            <button onclick="myFunction()" class="btn btn-success" style="display: inline-block;"><i class="fa fa-check"></i></button>
                              </form>
                            </td>

                          </tr>



                           </table>
                      </div>

                      </div>



          <script>
          var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn{{$value->id}}");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    var closex = document.getElementById("closex");
    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
    closex.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
      // function Functionclose() {
      //
      //          window.close();
      //          $('#myModal').dialog("close").
      //
      // }
      </script>
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
