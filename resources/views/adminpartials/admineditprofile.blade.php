@extends('admin')

@section('title', '| Edit Profile')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title">Edit User Profile</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        
                        <form class="form-horizontal" method="post" action="{{ route('adminpartials.admineditprofile.update') }}">
                            {{ csrf_field() }}
                            {{ method_field('POST') }}

                        <div class="form-group">
                            <label for="firstname" class="col-md-3 control-label">First Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="firstname" value="{{Auth::user()->firstname}}">
                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lastname" class="col-md-3 control-label">Last Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="lastname" value="{{Auth::user()->lastname}}">
                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-3 control-label">Email Address</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" id="email" name="email" placeholder="email" value="{{Auth::user()->email}}" readonly>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="col-md-3 control-label">Phone Number</label>
                            <div class="col-md-9">
                                <input type="string" class="form-control" id="phone" name="phone" placeholder="phone" value="{{Auth::user()->phone}}">
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <br>

                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                              <button type="submit" class="btn btn-info btn-block">Update</button>
                            </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>
@endsection