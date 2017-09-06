@extends('home')

@section('title', '| Edit Business Contact Info')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Edit Business Contacts</h3>
            </div>
                <ul class="list-group">
                    <form class="form-horizontal" method="post" action="{{-- {{url('/account/'.$account->id)}} --}}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-2">
                                <div align="left">
                                  <h4>Primary Contact:</h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pricontfirstname" class="col-md-5 control-label">First Name:</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" id="pricontfirstname" name="pricontfirstname" placeholder="First Name" value="{{-- {{ $account ->pricontfirstname }} --}}">
                                        @if ($errors->has('pricontfirstname'))
                                          <span class="help-block">
                                            <strong>{{-- {{ $errors->first('pricontfirstname') }} --}}</strong>
                                          </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pricontlastname" class="col-md-5 control-label">Last Name:</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" id="pricontlastname" name="pricontlastname" placeholder="Last Name" value="{{-- {{ $account ->pricontlastname }} --}}">
                                        @if ($errors->has('pricontlastname'))
                                            <span class="help-block">
                                                <strong>{{-- {{ $errors->first('pricontlastname') }} --}}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2">
                                <div class="form-group">
                                    <label for="pricontemail" class="col-md-5 control-label">Email:</label>
                                    <div class="col-md-7">
                                        <input type="email" class="form-control" id="pricontemail" name="pricontemail" placeholder="Email" value="{{-- {{ $account ->pricontemail }} --}}">
                                        @if ($errors->has('pricontemail'))
                                          <span class="help-block">
                                            <strong>{{-- {{ $errors->first('pricontemail') }} --}}</strong>
                                          </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pricontphonenumber" class="col-md-5 control-label">Phone Number:</label>
                                    <div class="col-md-7">
                                        <input type="phone" class="form-control" id="pricontphonenumber" name="pricontphonenumber" placeholder="Phone Number" value="{{-- {{ $account ->pricontphonenumber }} --}}">
                                        @if ($errors->has('pricontphonenumber'))
                                          <span class="help-block">
                                            <strong>{{-- {{ $errors->first('pricontphonenumber') }} --}}</strong>
                                          </span>
                                        @endif
                                    </div>
                                </div>
                            </div>        
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-2">
                                <div align="left">
                                  <h4>Secondary Contact:</h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="seccontfirstname" class="col-md-5 control-label">First Name:</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" id="seccontfirstname" name="seccontfirstname" placeholder="First Name" value="{{-- {{ $account ->seccontfirstname }} --}}">
                                        @if ($errors->has('seccontfirstname'))
                                          <span class="help-block">
                                            <strong>{{-- {{ $errors->first('seccontfirstname') }} --}}</strong>
                                          </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="seccontlastname" class="col-md-5 control-label">Last Name:</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" id="seccontlastname" name="seccontlastname" placeholder="Last Name" value="{{-- {{ $account ->seccontlastname }} --}}">
                                        @if ($errors->has('seccontlastname'))
                                            <span class="help-block">
                                                <strong>{{-- {{ $errors->first('seccontlastname') }} --}}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2">
                                <div class="form-group">
                                    <label for="seccontemail" class="col-md-5 control-label">Email:</label>
                                    <div class="col-md-7">
                                        <input type="email" class="form-control" id="seccontemail" name="seccontemail" placeholder="Email" value="{{-- {{ $account ->seccontemail }} --}}">
                                        @if ($errors->has('seccontemail'))
                                          <span class="help-block">
                                            <strong>{{-- {{ $errors->first('seccontemail') }} --}}</strong>
                                          </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="seccontphonenumber" class="col-md-5 control-label">Phone Number:</label>
                                    <div class="col-md-7">
                                        <input type="phone" class="form-control" id="seccontphonenumber" name="seccontphonenumber" placeholder="Phone Number" value="{{-- {{ $account ->seccontphonenumber }} --}}">
                                        @if ($errors->has('seccontphonenumber'))
                                          <span class="help-block">
                                            <strong>{{-- {{ $errors->first('seccontphonenumber') }} --}}</strong>
                                          </span>
                                        @endif
                                    </div>
                                </div>
                            </div>        
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-2">
                                <div align="left">
                                  <h4>After-Hours Contact:</h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="latecontfirstname" class="col-md-5 control-label">First Name:</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" id="latecontfirstname" name="latecontfirstname" placeholder="First Name" value="{{-- {{ $account ->latecontfirstname }} --}}">
                                        @if ($errors->has('latecontfirstname'))
                                          <span class="help-block">
                                            <strong>{{-- {{ $errors->first('latecontfirstname') }} --}}</strong>
                                          </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="latecontlastname" class="col-md-5 control-label">Last Name:</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" id="latecontlastname" name="latecontlastname" placeholder="Last Name" value="{{-- {{ $account ->latecontlastname }} --}}">
                                        @if ($errors->has('latecontlastname'))
                                            <span class="help-block">
                                                <strong>{{-- {{ $errors->first('latecontlastname') }} --}}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2">
                                <div class="form-group">
                                    <label for="latecontemail" class="col-md-5 control-label">Email:</label>
                                    <div class="col-md-7">
                                        <input type="email" class="form-control" id="latecontemail" name="latecontemail" placeholder="Email" value="{{-- {{ $account ->latecontemail }} --}}">
                                        @if ($errors->has('latecontemail'))
                                          <span class="help-block">
                                            <strong>{{-- {{ $errors->first('latecontemail') }} --}}</strong>
                                          </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="latecontphonenumber" class="col-md-5 control-label">Phone Number:</label>
                                    <div class="col-md-7">
                                        <input type="phone" class="form-control" id="latecontphonenumber" name="latecontphonenumber" placeholder="Phone Number" value="{{-- {{ $account ->latecontphonenumber }} --}}">
                                        @if ($errors->has('latecontphonenumber'))
                                          <span class="help-block">
                                            <strong>{{-- {{ $errors->first('latecontphonenumber') }} --}}</strong>
                                          </span>
                                        @endif
                                    </div>
                                </div>
                            </div>        
                        </div>                
                    </li>
                    <li class="list-group-item">
                        <div class="row">   
                            <div class="form-group">
                                <div class="col-md-2 col-md-offset-5">
                                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </form>   
        </div>
    </div>
</div>
@endsection