@extends('layouts.app0')

@section('content')

<div class="content-wrapper" style="min-height:1000px;">

<div class="container" style="padding-top:50px;">

<!-- <a href="{{ url('profile/create') }}" class="btn btn-block btn-warning">Create</a> -->

    <div class="col-xs-10 col-md-10">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Information Website</h3>
          <div class="box-body ">

            <div class="row" style="padding-top:10px;">
              <div class="col-md-2" style="text-align:right;">
                <label for="id" >ID</label>
                </div>
                  <div class="col-md-8">
                    {{$value->id}}
                  </div>
                    </div>
                      <div class="row" style="padding-top:10px;">
                  <div class="col-md-2" style="text-align:right;">
                    <label for="username">Logo</label>
                    </div>
                  <div class="col-md-8">
                      <img src="../WebsiteImage/{{$value->customerlogo}}" style="width:200px;auto;">
                  </div>
                    </div>

                      <div class="row" style="padding-top:10px;">
                        <div class="col-md-2" style="text-align:right;">
                          <label for="name" >Tools</label>
                        </div>
                        <div class="col-md-8">
                          <?php
                          $a =   $value->tools;
                          $b = html_entity_decode($a);
                          echo $b;
                          ?>

                        </div>
                          </div>
                          <div class="row" style="padding-top:10px;">
                          <div class="col-md-2" style="text-align:right;">
                          <label for="description">Description</label>
                          </div>
                          <div class="col-md-8">
                            <?php
                            $a =  $value->description;
                            $b = html_entity_decode($a);
                            echo $b;
                            ?>

                          </div>
                          </div>
                          <div class="row" style="padding-top:10px;">
                            <div class="col-md-2" style="text-align:right;">
                              <label for="picture" >Picture</label>
                            </div>
                            <div class="col-md-8">
                                <img src="../WebsiteImage/{{$value->picture}}" style="width:200px;auto;">
                            </div>
                              </div>
                              <div class="row" style="padding-top:10px;">
                            <div class="col-md-2" style="text-align:right;">
                              <label for="address">Date time</label>
                            </div>
                            <div class="col-md-8">
                              {{$value->date}}
                            </div>
                              </div>
                              <div class="row" style="padding-top:10px;">
                          <div class="col-md-2" style="text-align:right;">
                            <label for="email">By</label>
                            </div>
                          <div class="col-md-8">
                              {{$value->by}}
                          </div>
                            </div>
                              <div  style="text-align:center;padding-top:20px;" >
                                <a href="{{url('website')}}" class="btn btn-primary">Back</a>
                              </div>
                          </div>


          </div>

        </div>
        <!-- /.box-header -->

        <!-- /.box-body -->
      </div>


</div>

</div>




@endsection
