@extends('customerapp.layouts.app2')

@section('content')

<body style="background:#d6d6d6;">
  <div class="row" style="margin-top:120px;">
<div class="container col-sm-6 col-sm-offset-3">
<h1>Add Customer Information</h1>
<form method="POST" action="{{ action('CustomerController@update', ['id' => $customer->id]) }}">
    {{ csrf_field() }}
  {{ method_field('PUT') }}
  <div class="form-group">
    <label for="firstname" class="col-sm-3 control-label"style="padding:5px;">Firstname</label>
    <div class="col-sm-9" style="padding:5px;">
      <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname"  required="required" value="{{$customer->firstname}}">
    </div>
  </div>

  <div class="form-group">
    <label for="lastname" class="col-sm-3 control-label"style="padding:5px;">Lastname</label>
    <div class="col-sm-9"style="padding:5px;">
      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname"  required="required" value="{{$customer->lastname}}">
    </div>
  </div>

  <div class="form-group">
    <label for="companyname" class="col-sm-3 control-label"style="padding:5px;">Conpany Name</label>
    <div class="col-sm-9"style="padding:5px;">
      <input type="text" class="form-control" id="companyname" name="companyname" placeholder="Company Name"  required="required" value="{{$customer->companyname}}">
    </div>
  </div>

  <div class="form-group">
    <label for="address" class="col-sm-3 control-label"style="padding:5px;">Address</label>
    <div class="col-sm-9"style="padding:5px;">
      <textarea name="address" id="address" rows="8" cols="70" class="form-control"></textarea>
    </div>
  </div>

  <div class="form-group">
    <label for="tel" class="col-sm-3 control-label"style="padding:5px;">Tel</label>
    <div class="col-sm-9"style="padding:5px;">
      <input type="text" class="form-control" id="tel" name="tel" placeholder="Tel" required="required">
    </div>
  </div>

  <div class="form-group">
    <label for="fax" class="col-sm-3 control-label"style="padding:5px;">Fax</label>
    <div class="col-sm-9"style="padding:5px;">
      <input type="text" class="form-control" id="fax" name="fax" placeholder="fax"  required="required">
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-3 control-label"style="padding:5px;">Password</label>
    <div class="col-sm-9"style="padding:5px;">
      <input id="password" type="password" class="form-control" name="password" id="password" required="required">
      @if ($errors->has('password'))
          <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
          </span>
      @endif
    </div>
  </div>
  <div class="form-group">
    <label for="password-confirm" class="col-sm-3 control-label"style="padding:5px;">Confirm Password</label>
    <div class="col-sm-9"style="padding:5px;">
      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="required">
    </div>
  </div>

  <div class="form-group">
    <label for="taxno" class="col-sm-3 control-label"style="padding:5px;">No.Tax</label>
    <div class="col-sm-9"style="padding:5px;">
      <input type="text" class="form-control" id="taxno" name="taxno" placeholder="No.Tax"  required="required">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-warning">Submit</button>

    </div>
  </div>
</form>


</div>
</div>
</body>

@endsection
