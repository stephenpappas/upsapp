@extends('superadmin')

@section('title', '| Create New Account Admins')

@section('content')

<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Create New Account Executive</h3>
        </div>

        <div class="panel-body">
            <div class="row">
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                        <label for="firstname" class="col-md-4 control-label">First Name</label>

                        <div class="col-md-6">
                            <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>

                            @if ($errors->has('firstname'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('firstname') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                        <label for="lastname" class="col-md-4 control-label">Last Name</label>

                        <div class="col-md-6">
                            <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>

                            @if ($errors->has('lastname'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('lastname') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                        <label for="phone" class="col-md-4 control-label">Phone Number</label>

                        <div class="col-md-6">
                            <input id="phone" type="phone" class="form-control" name="phone" value="{{ old('phone') }}" required>

                            @if ($errors->has('phone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" value="password" readonly>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="password" readonly>
                        </div>
                    </div>

                    <p class="col-md-8 col-md-offset-2 alert alert-warning" role="alert"> The default password is "password".  The account executives will need to reset their password to a secure, unique password upon first login. </p>

                    <div class="form-group">
                        <div class="col-md-2 col-md-offset-5">
                            <button type="submit" class="btn btn-success btn-block ">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>    
        </div>
    </div>
</div>

@endsection