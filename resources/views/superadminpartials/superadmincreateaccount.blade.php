@extends('superadmin')

@section('title', '| Create New Account')

@section('content')

<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Create New Account</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <form class="form-horizontal" method="post" action="{{-- {{url('/account/'.$account->id)}} --}}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}                  
                <div class="col-md-8 col-md-offset-2">
          
                    <div class="form-group">
                      <label for="accountname" class="col-md-3 control-label">Account Name:</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" id="accountname" name="accountname" placeholder="Account Name" value="{{-- {{$account->accountname }} --}}">
                        @if ($errors->has('accountname'))
                          <span class="help-block">
                            <strong>{{-- {{ $errors->first('accountname') }} --}}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                      <label for="accountalpha" class="col-md-3 control-label">Account Alpha:</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" id="accountalpha" name="accountalpha" placeholder="Account Alpha" value="{{-- {{ $account->accountalpha }} --}}" ></input>
                        @if ($errors->has('accountalpha'))
                          <span class="help-block">
                              <strong>{{-- {{ $errors->first('accountalpha') }} --}}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                      <label for="address1" class="col-md-3 control-label">Street Address:</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" id="address1" name="address1" placeholder="Street Address" value="{{-- {{ $account->address1 }} --}}">
                        @if ($errors->has('address1'))
                          <span class="help-block">
                              <strong>{{-- {{ $errors->first('address1') }} --}}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                      <label for="address2" class="col-md-3 control-label">Unit #/Suite #:</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" id="address2" name="address2" placeholder="Unit #/Suite #" value="{{-- {{ $account->address2 }} --}}">
                        @if ($errors->has('address2'))
                          <span class="help-block">
                              <strong>{{-- {{ $errors->first('address2') }} --}}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                      <label for="city" class="col-md-3 control-label">City:</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" id="city" name="city" placeholder="City" value="{{-- {{ $account->city }} --}}">
                        @if ($errors->has('city'))
                          <span class="help-block">
                              <strong>{{-- {{ $errors->first('city') }} --}}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                      <label for="state" class="col-md-3 control-label">State:</label>
                      <div class="col-md-9">
                        <select type="text" class="form-control" id="state" name="state" placeholder="State" value="{{-- {{ $account->state }} --}}">
                        <option>CA</option>
                        </select>
                        @if ($errors->has('state'))
                          <span class="help-block">
                              <strong>{{-- {{ $errors->first('state') }} --}}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                        <label for="zip" class="col-md-3 control-label">Zip:</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip Code" value="{{-- {{ $account->zip }} --}}">
                                 @if ($errors->has('zip'))
                                    <span class="help-block">
                                        <strong>{{-- {{ $errors->first('zip') }} --}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                
                </br>

                <div class="col-md-4 col-md-offset-4">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-block">Create</button>
                    </div>
                </div>
                </form>
            </div>    
        </div>
    </div>
</div>

@endsection