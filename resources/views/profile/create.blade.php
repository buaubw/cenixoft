@extends('layouts.app0')

@section('content')

<div class="content-wrapper" style="height:800px;">

  <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Website Service</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea class="form-control"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">link</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="URL">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile">

                  </div>

                </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>







</div>






@endsection
