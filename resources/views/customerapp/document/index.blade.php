@extends('customerapp.layouts.app2')

@section('content')

<body style="background:black;">
  <div class="row" style="margin-top:100px;">
<div class="container">
    <div class="row" style="text-align:center;">

          <h1 style="font-weight:900;font-size:50px;">{{$customer->companyname}}</h1>
      <div class="" style="margin-top:50px;">
        @foreach($projects as $project)
        <div class="" style="padding:10px;">
          <a href="{{url('document/customerdocument')}}<?php echo '/'.$project->id ?>" class="btn btn-default" style="background-color:#4e4e4e!important;color:white;border:none;padding: 15px 40px 15px 40px;">{{$project->name}}</a>
        </div>

        @endforeach
      </div>




    </div>
</div>
</div>
</body>

@endsection
