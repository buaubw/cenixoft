@extends('layouts.app')

@section('content')

<div class="content-wrapper" style="height:1000px;">
  <div class="container" style="padding-top:20px;">

    <h3 class="box-title">{{Auth::user()->username}}</h3>

      <div class="col-xs-10 col-md-10">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Edit Account</h3>
            <div class="box-body ">

              <div class="panel-body">
                    <form action="{{ action('AccountController@update',Auth::user()->id) }}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('PUT') }}

                      @if (count($errors) > 0)
                      <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach

                        </ul>
                      </div>
                    @endif
                      <p>{{ $errorx }}</p>
                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" style="padding:20px;">
                          <label for="name" class="col-md-4 control-label">Full Name</label>

                          <div class="col-md-6">
                              <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required autofocus>

                              @if ($errors->has('name'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}" style="padding:20px;">
                          <label for="username" class="col-md-4 control-label">UserName</label>

                          <div class="col-md-6">
                              <input id="username" type="text" class="form-control" name="username" value="{{ Auth::user()->username }}" required autofocus>

                              @if ($errors->has('username'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('username') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" style="padding:20px;">
                          <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                          <div class="col-md-6">
                              <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required>

                              @if ($errors->has('email'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" style="padding:20px;">
                          <label for="oldpassword" class="col-md-4 control-label">Old Password</label>

                          <div class="col-md-6">
                              <input id="oldpassword" type="password" class="form-control" name="oldpassword" required>

                              @if ($errors->has('password'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>


                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" style="padding:20px;">
                          <label for="password" class="col-md-4 control-label">Password</label>

                          <div class="col-md-6">
                              <input id="password" type="password" class="form-control" name="password" required>

                              @if ($errors->has('password'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group" style="padding:20px;">
                          <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                          <div class="col-md-6">
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                          </div>
                      </div>
                      <input type="hidden" name="role" value="admin" >
                      <div class="form-group" style="padding:20px;">
                          <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-primary">
                                  Change
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
            </div>

          </div>

        </div>


  </div>

  </div>



</div>






@endsection
