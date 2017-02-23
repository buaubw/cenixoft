@extends('customerapp.layouts.app20')

@section('content')
<body style="background-color:black;">

<div class="row" style="margin-top:80px;">


  <div class=" col-md-offset-1 col-md-2">
<h3>{{$logo->customername }}</h3>
<p>
  <?php
$orig = $logo->tools;

$a = htmlentities($orig);

$b = html_entity_decode($a);
echo $b; // I'll "walk" the <b>dog</b> now
?>
</p>

  </div>
  <div class="col-md-8 col-md-offset-1">
<h3>Description</h3>
<p>
  <?php
$orig = $logo->description;

$a = htmlentities($orig);

$b = html_entity_decode($a);
echo $b; // I'll "walk" the <b>dog</b> now
?>
</p>
  </div>

</div>
  <div class="row" style="margin-top:40px;">
    <div class=" col-md-offset-1 col-md-10 ">
      <center>
      <img src="/LogoImage/{{$logo->picture}}" class="img-responsive" alt="..." >
    </center>
</div>
</div>






</body>



@endsection
