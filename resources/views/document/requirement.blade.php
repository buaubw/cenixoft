@extends('layouts.app0')

@section('content')

<div class="content-wrapper" style="height:1000px;">



<div class="container" style="padding-top:50px;">
  <div class="col-md-8">
<center><a href="{{url('document/requirement')}}"  class="btn btn-warning" style=" margin-left: 20px">Requirement</a>
<a  href="{{url('document/quotation')}}" class="btn  btn-warning" style=" margin-left: 20px">Quotation</a>
<a  href="{{url('document/contact')}}" class="btn btn-warning " style=" margin-left: 20px" >Contact</a>
<a  href="{{url('document/invoice')}}" class="btn btn-warning " style=" margin-left: 20px">Invoice</a></center>
<a href="{{url('document/Create')}}"  class="btn btn-warning " style=" margin-top: 20px">Create</a>

</div>

  <div class="row" style="padding-top:50px;">
    <div class="col-xs-11 col-md-11">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Requirement</h3>

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
            <th>No.</th>
            <th>Requirement</th>
            <th>Date time</th>
            <th>By</th>
            <th style="text-align: center;">View</th>
            <th style="text-align: center;">Edit</th>
            <th style="text-align: center;">Remove</th>
          </tr>
          <tr>
            <td>1</td>
            <td>Ichitan</td>
            <td>11-7-2014</td>
            <td>Suwanan</td>
            <td style="text-align: center;"><a><i class="fa fa-eye" ></i> </a></td>
            <td style="text-align: center;"><a><i class="fa fa-edit"></i> </a></td>
            <td style="text-align: center;"><a><i class="fa fa-times"></i> </a></td>

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
